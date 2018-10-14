<?php
/**
 * Created by PhpStorm.
 * User: osvgud
 * Date: 2018-10-14
 * Time: 12:58
 */

namespace osvgud;

use Phpml\Dataset\CsvDataset;
use Phpml\Dataset\ArrayDataset;
use Phpml\FeatureExtraction\TokenCountVectorizer;
use Phpml\Tokenization\WordTokenizer;
use Phpml\CrossValidation\StratifiedRandomSplit;
use Phpml\FeatureExtraction\TfIdfTransformer;
use Phpml\Metric\Accuracy;
use Phpml\Classification\SVC;
use Phpml\SupportVectorMachine\Kernel;

class Machine
{
    // callable type realisation
    // need this strict callable type because of inheritance ( i hope you won't punish me so hard for this :) )
    public function speak(callable $func = null)
    {
        if ($func) {
            return call_user_func($func);
        } else {
            return "<p>machines can't speak</p>";
        }
    }

    // variable with default value, protected visibility
    protected function guess($text = 'Coffee')
    {

        return "<p>" . $text . " with milk</p>";
    }

    // required library relisation ( PHP-AI )
    public function languagecheck()
    {
        $dataset = new CsvDataset(__DIR__ . '\data\languages.csv', 1, true);
        $vectorizer = new TokenCountVectorizer(new WordTokenizer());
        $tfIdfTransformer = new TfIdfTransformer();
        $samples = [];
        foreach ($dataset->getSamples() as $sample) {
            $samples[] = $sample[0];
        }
        $vectorizer->fit($samples);
        $vectorizer->transform($samples);
        $tfIdfTransformer->fit($samples);
        $tfIdfTransformer->transform($samples);
        $dataset = new ArrayDataset($samples, $dataset->getTargets());
        $randomSplit = new StratifiedRandomSplit($dataset, 0.2);
        $classifier = new SVC(Kernel::RBF, 10000);
        $classifier->train($randomSplit->getTrainSamples(), $randomSplit->getTrainLabels());
        $predictedLabels = $classifier->predict($randomSplit->getTestSamples());
        $testlabelarr = $randomSplit->getTestLabels();

        $this->printAnswer($predictedLabels, $testlabelarr, Accuracy::score($randomSplit->getTestLabels(), $predictedLabels));

    }

    // function to print detailed answer, private visibility
    private function printAnswer($labelarr, $predictions, float $accuracy)
    {
        echo 'PHP-AI Library:';
        echo '<table>';
        echo '<th>Answer</th>';
        echo '<th>Prediction</th>';
        for ($i = 0; $i < count($labelarr); $i++) {
            echo '<tr>';
            if ($labelarr[$i] === $predictions[$i]) {
                $style = 'background-color: green;';
            } else {
                $style = 'background-color: red;';
            }
            echo '<td style="' . $style . '">' . $labelarr[$i] . '</td>';
            echo '<td style="' . $style . '">' . $predictions[$i] . '</td>';
            echo '</tr>';
        }
        echo '<tr><td colspan="2">Accuracy: ' . $accuracy . '</td></tr>';
        echo '</table>';
    }
}