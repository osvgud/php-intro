<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c540e9df0fa23da1cb1760f74f735f0
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'osvgud\\' => 7,
        ),
        'P' => 
        array (
            'Phpml\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'osvgud\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Phpml\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-ai/php-ml/src',
        ),
    );

    public static $classMap = array (
        'Phpml\\Association\\Apriori' => __DIR__ . '/..' . '/php-ai/php-ml/src/Association/Apriori.php',
        'Phpml\\Association\\Associator' => __DIR__ . '/..' . '/php-ai/php-ml/src/Association/Associator.php',
        'Phpml\\Classification\\Classifier' => __DIR__ . '/..' . '/php-ai/php-ml/src/Classification/Classifier.php',
        'Phpml\\Classification\\DecisionTree' => __DIR__ . '/..' . '/php-ai/php-ml/src/Classification/DecisionTree.php',
        'Phpml\\Classification\\DecisionTree\\DecisionTreeLeaf' => __DIR__ . '/..' . '/php-ai/php-ml/src/Classification/DecisionTree/DecisionTreeLeaf.php',
        'Phpml\\Classification\\Ensemble\\AdaBoost' => __DIR__ . '/..' . '/php-ai/php-ml/src/Classification/Ensemble/AdaBoost.php',
        'Phpml\\Classification\\Ensemble\\Bagging' => __DIR__ . '/..' . '/php-ai/php-ml/src/Classification/Ensemble/Bagging.php',
        'Phpml\\Classification\\Ensemble\\RandomForest' => __DIR__ . '/..' . '/php-ai/php-ml/src/Classification/Ensemble/RandomForest.php',
        'Phpml\\Classification\\KNearestNeighbors' => __DIR__ . '/..' . '/php-ai/php-ml/src/Classification/KNearestNeighbors.php',
        'Phpml\\Classification\\Linear\\Adaline' => __DIR__ . '/..' . '/php-ai/php-ml/src/Classification/Linear/Adaline.php',
        'Phpml\\Classification\\Linear\\DecisionStump' => __DIR__ . '/..' . '/php-ai/php-ml/src/Classification/Linear/DecisionStump.php',
        'Phpml\\Classification\\Linear\\LogisticRegression' => __DIR__ . '/..' . '/php-ai/php-ml/src/Classification/Linear/LogisticRegression.php',
        'Phpml\\Classification\\Linear\\Perceptron' => __DIR__ . '/..' . '/php-ai/php-ml/src/Classification/Linear/Perceptron.php',
        'Phpml\\Classification\\MLPClassifier' => __DIR__ . '/..' . '/php-ai/php-ml/src/Classification/MLPClassifier.php',
        'Phpml\\Classification\\NaiveBayes' => __DIR__ . '/..' . '/php-ai/php-ml/src/Classification/NaiveBayes.php',
        'Phpml\\Classification\\SVC' => __DIR__ . '/..' . '/php-ai/php-ml/src/Classification/SVC.php',
        'Phpml\\Classification\\WeightedClassifier' => __DIR__ . '/..' . '/php-ai/php-ml/src/Classification/WeightedClassifier.php',
        'Phpml\\Clustering\\Clusterer' => __DIR__ . '/..' . '/php-ai/php-ml/src/Clustering/Clusterer.php',
        'Phpml\\Clustering\\DBSCAN' => __DIR__ . '/..' . '/php-ai/php-ml/src/Clustering/DBSCAN.php',
        'Phpml\\Clustering\\FuzzyCMeans' => __DIR__ . '/..' . '/php-ai/php-ml/src/Clustering/FuzzyCMeans.php',
        'Phpml\\Clustering\\KMeans' => __DIR__ . '/..' . '/php-ai/php-ml/src/Clustering/KMeans.php',
        'Phpml\\Clustering\\KMeans\\Cluster' => __DIR__ . '/..' . '/php-ai/php-ml/src/Clustering/KMeans/Cluster.php',
        'Phpml\\Clustering\\KMeans\\Point' => __DIR__ . '/..' . '/php-ai/php-ml/src/Clustering/KMeans/Point.php',
        'Phpml\\Clustering\\KMeans\\Space' => __DIR__ . '/..' . '/php-ai/php-ml/src/Clustering/KMeans/Space.php',
        'Phpml\\CrossValidation\\RandomSplit' => __DIR__ . '/..' . '/php-ai/php-ml/src/CrossValidation/RandomSplit.php',
        'Phpml\\CrossValidation\\Split' => __DIR__ . '/..' . '/php-ai/php-ml/src/CrossValidation/Split.php',
        'Phpml\\CrossValidation\\StratifiedRandomSplit' => __DIR__ . '/..' . '/php-ai/php-ml/src/CrossValidation/StratifiedRandomSplit.php',
        'Phpml\\Dataset\\ArrayDataset' => __DIR__ . '/..' . '/php-ai/php-ml/src/Dataset/ArrayDataset.php',
        'Phpml\\Dataset\\CsvDataset' => __DIR__ . '/..' . '/php-ai/php-ml/src/Dataset/CsvDataset.php',
        'Phpml\\Dataset\\Dataset' => __DIR__ . '/..' . '/php-ai/php-ml/src/Dataset/Dataset.php',
        'Phpml\\Dataset\\Demo\\GlassDataset' => __DIR__ . '/..' . '/php-ai/php-ml/src/Dataset/Demo/GlassDataset.php',
        'Phpml\\Dataset\\Demo\\IrisDataset' => __DIR__ . '/..' . '/php-ai/php-ml/src/Dataset/Demo/IrisDataset.php',
        'Phpml\\Dataset\\Demo\\WineDataset' => __DIR__ . '/..' . '/php-ai/php-ml/src/Dataset/Demo/WineDataset.php',
        'Phpml\\Dataset\\FilesDataset' => __DIR__ . '/..' . '/php-ai/php-ml/src/Dataset/FilesDataset.php',
        'Phpml\\DimensionReduction\\EigenTransformerBase' => __DIR__ . '/..' . '/php-ai/php-ml/src/DimensionReduction/EigenTransformerBase.php',
        'Phpml\\DimensionReduction\\KernelPCA' => __DIR__ . '/..' . '/php-ai/php-ml/src/DimensionReduction/KernelPCA.php',
        'Phpml\\DimensionReduction\\LDA' => __DIR__ . '/..' . '/php-ai/php-ml/src/DimensionReduction/LDA.php',
        'Phpml\\DimensionReduction\\PCA' => __DIR__ . '/..' . '/php-ai/php-ml/src/DimensionReduction/PCA.php',
        'Phpml\\Estimator' => __DIR__ . '/..' . '/php-ai/php-ml/src/Estimator.php',
        'Phpml\\Exception\\DatasetException' => __DIR__ . '/..' . '/php-ai/php-ml/src/Exception/DatasetException.php',
        'Phpml\\Exception\\FileException' => __DIR__ . '/..' . '/php-ai/php-ml/src/Exception/FileException.php',
        'Phpml\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/php-ai/php-ml/src/Exception/InvalidArgumentException.php',
        'Phpml\\Exception\\InvalidOperationException' => __DIR__ . '/..' . '/php-ai/php-ml/src/Exception/InvalidOperationException.php',
        'Phpml\\Exception\\LibsvmCommandException' => __DIR__ . '/..' . '/php-ai/php-ml/src/Exception/LibsvmCommandException.php',
        'Phpml\\Exception\\MatrixException' => __DIR__ . '/..' . '/php-ai/php-ml/src/Exception/MatrixException.php',
        'Phpml\\Exception\\NormalizerException' => __DIR__ . '/..' . '/php-ai/php-ml/src/Exception/NormalizerException.php',
        'Phpml\\Exception\\SerializeException' => __DIR__ . '/..' . '/php-ai/php-ml/src/Exception/SerializeException.php',
        'Phpml\\FeatureExtraction\\StopWords' => __DIR__ . '/..' . '/php-ai/php-ml/src/FeatureExtraction/StopWords.php',
        'Phpml\\FeatureExtraction\\StopWords\\English' => __DIR__ . '/..' . '/php-ai/php-ml/src/FeatureExtraction/StopWords/English.php',
        'Phpml\\FeatureExtraction\\StopWords\\French' => __DIR__ . '/..' . '/php-ai/php-ml/src/FeatureExtraction/StopWords/French.php',
        'Phpml\\FeatureExtraction\\StopWords\\Polish' => __DIR__ . '/..' . '/php-ai/php-ml/src/FeatureExtraction/StopWords/Polish.php',
        'Phpml\\FeatureExtraction\\TfIdfTransformer' => __DIR__ . '/..' . '/php-ai/php-ml/src/FeatureExtraction/TfIdfTransformer.php',
        'Phpml\\FeatureExtraction\\TokenCountVectorizer' => __DIR__ . '/..' . '/php-ai/php-ml/src/FeatureExtraction/TokenCountVectorizer.php',
        'Phpml\\FeatureSelection\\ScoringFunction' => __DIR__ . '/..' . '/php-ai/php-ml/src/FeatureSelection/ScoringFunction.php',
        'Phpml\\FeatureSelection\\ScoringFunction\\ANOVAFValue' => __DIR__ . '/..' . '/php-ai/php-ml/src/FeatureSelection/ScoringFunction/ANOVAFValue.php',
        'Phpml\\FeatureSelection\\ScoringFunction\\UnivariateLinearRegression' => __DIR__ . '/..' . '/php-ai/php-ml/src/FeatureSelection/ScoringFunction/UnivariateLinearRegression.php',
        'Phpml\\FeatureSelection\\SelectKBest' => __DIR__ . '/..' . '/php-ai/php-ml/src/FeatureSelection/SelectKBest.php',
        'Phpml\\FeatureSelection\\VarianceThreshold' => __DIR__ . '/..' . '/php-ai/php-ml/src/FeatureSelection/VarianceThreshold.php',
        'Phpml\\Helper\\OneVsRest' => __DIR__ . '/..' . '/php-ai/php-ml/src/Helper/OneVsRest.php',
        'Phpml\\Helper\\Optimizer\\ConjugateGradient' => __DIR__ . '/..' . '/php-ai/php-ml/src/Helper/Optimizer/ConjugateGradient.php',
        'Phpml\\Helper\\Optimizer\\GD' => __DIR__ . '/..' . '/php-ai/php-ml/src/Helper/Optimizer/GD.php',
        'Phpml\\Helper\\Optimizer\\MP' => __DIR__ . '/..' . '/php-ai/php-ml/src/Helper/Optimizer/ConjugateGradient.php',
        'Phpml\\Helper\\Optimizer\\Optimizer' => __DIR__ . '/..' . '/php-ai/php-ml/src/Helper/Optimizer/Optimizer.php',
        'Phpml\\Helper\\Optimizer\\StochasticGD' => __DIR__ . '/..' . '/php-ai/php-ml/src/Helper/Optimizer/StochasticGD.php',
        'Phpml\\Helper\\Predictable' => __DIR__ . '/..' . '/php-ai/php-ml/src/Helper/Predictable.php',
        'Phpml\\Helper\\Trainable' => __DIR__ . '/..' . '/php-ai/php-ml/src/Helper/Trainable.php',
        'Phpml\\IncrementalEstimator' => __DIR__ . '/..' . '/php-ai/php-ml/src/IncrementalEstimator.php',
        'Phpml\\Math\\Comparison' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/Comparison.php',
        'Phpml\\Math\\Distance' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/Distance.php',
        'Phpml\\Math\\Distance\\Chebyshev' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/Distance/Chebyshev.php',
        'Phpml\\Math\\Distance\\Euclidean' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/Distance/Euclidean.php',
        'Phpml\\Math\\Distance\\Manhattan' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/Distance/Manhattan.php',
        'Phpml\\Math\\Distance\\Minkowski' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/Distance/Minkowski.php',
        'Phpml\\Math\\Kernel' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/Kernel.php',
        'Phpml\\Math\\Kernel\\RBF' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/Kernel/RBF.php',
        'Phpml\\Math\\LinearAlgebra\\EigenvalueDecomposition' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/LinearAlgebra/EigenvalueDecomposition.php',
        'Phpml\\Math\\LinearAlgebra\\LUDecomposition' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/LinearAlgebra/LUDecomposition.php',
        'Phpml\\Math\\Matrix' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/Matrix.php',
        'Phpml\\Math\\Product' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/Product.php',
        'Phpml\\Math\\Set' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/Set.php',
        'Phpml\\Math\\Statistic\\ANOVA' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/Statistic/ANOVA.php',
        'Phpml\\Math\\Statistic\\Correlation' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/Statistic/Correlation.php',
        'Phpml\\Math\\Statistic\\Covariance' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/Statistic/Covariance.php',
        'Phpml\\Math\\Statistic\\Gaussian' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/Statistic/Gaussian.php',
        'Phpml\\Math\\Statistic\\Mean' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/Statistic/Mean.php',
        'Phpml\\Math\\Statistic\\StandardDeviation' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/Statistic/StandardDeviation.php',
        'Phpml\\Math\\Statistic\\Variance' => __DIR__ . '/..' . '/php-ai/php-ml/src/Math/Statistic/Variance.php',
        'Phpml\\Metric\\Accuracy' => __DIR__ . '/..' . '/php-ai/php-ml/src/Metric/Accuracy.php',
        'Phpml\\Metric\\ClassificationReport' => __DIR__ . '/..' . '/php-ai/php-ml/src/Metric/ClassificationReport.php',
        'Phpml\\Metric\\ConfusionMatrix' => __DIR__ . '/..' . '/php-ai/php-ml/src/Metric/ConfusionMatrix.php',
        'Phpml\\ModelManager' => __DIR__ . '/..' . '/php-ai/php-ml/src/ModelManager.php',
        'Phpml\\NeuralNetwork\\ActivationFunction' => __DIR__ . '/..' . '/php-ai/php-ml/src/NeuralNetwork/ActivationFunction.php',
        'Phpml\\NeuralNetwork\\ActivationFunction\\BinaryStep' => __DIR__ . '/..' . '/php-ai/php-ml/src/NeuralNetwork/ActivationFunction/BinaryStep.php',
        'Phpml\\NeuralNetwork\\ActivationFunction\\Gaussian' => __DIR__ . '/..' . '/php-ai/php-ml/src/NeuralNetwork/ActivationFunction/Gaussian.php',
        'Phpml\\NeuralNetwork\\ActivationFunction\\HyperbolicTangent' => __DIR__ . '/..' . '/php-ai/php-ml/src/NeuralNetwork/ActivationFunction/HyperbolicTangent.php',
        'Phpml\\NeuralNetwork\\ActivationFunction\\PReLU' => __DIR__ . '/..' . '/php-ai/php-ml/src/NeuralNetwork/ActivationFunction/PReLU.php',
        'Phpml\\NeuralNetwork\\ActivationFunction\\Sigmoid' => __DIR__ . '/..' . '/php-ai/php-ml/src/NeuralNetwork/ActivationFunction/Sigmoid.php',
        'Phpml\\NeuralNetwork\\ActivationFunction\\ThresholdedReLU' => __DIR__ . '/..' . '/php-ai/php-ml/src/NeuralNetwork/ActivationFunction/ThresholdedReLU.php',
        'Phpml\\NeuralNetwork\\Layer' => __DIR__ . '/..' . '/php-ai/php-ml/src/NeuralNetwork/Layer.php',
        'Phpml\\NeuralNetwork\\Network' => __DIR__ . '/..' . '/php-ai/php-ml/src/NeuralNetwork/Network.php',
        'Phpml\\NeuralNetwork\\Network\\LayeredNetwork' => __DIR__ . '/..' . '/php-ai/php-ml/src/NeuralNetwork/Network/LayeredNetwork.php',
        'Phpml\\NeuralNetwork\\Network\\MultilayerPerceptron' => __DIR__ . '/..' . '/php-ai/php-ml/src/NeuralNetwork/Network/MultilayerPerceptron.php',
        'Phpml\\NeuralNetwork\\Node' => __DIR__ . '/..' . '/php-ai/php-ml/src/NeuralNetwork/Node.php',
        'Phpml\\NeuralNetwork\\Node\\Bias' => __DIR__ . '/..' . '/php-ai/php-ml/src/NeuralNetwork/Node/Bias.php',
        'Phpml\\NeuralNetwork\\Node\\Input' => __DIR__ . '/..' . '/php-ai/php-ml/src/NeuralNetwork/Node/Input.php',
        'Phpml\\NeuralNetwork\\Node\\Neuron' => __DIR__ . '/..' . '/php-ai/php-ml/src/NeuralNetwork/Node/Neuron.php',
        'Phpml\\NeuralNetwork\\Node\\Neuron\\Synapse' => __DIR__ . '/..' . '/php-ai/php-ml/src/NeuralNetwork/Node/Neuron/Synapse.php',
        'Phpml\\NeuralNetwork\\Training' => __DIR__ . '/..' . '/php-ai/php-ml/src/NeuralNetwork/Training.php',
        'Phpml\\NeuralNetwork\\Training\\Backpropagation' => __DIR__ . '/..' . '/php-ai/php-ml/src/NeuralNetwork/Training/Backpropagation.php',
        'Phpml\\NeuralNetwork\\Training\\Backpropagation\\Sigma' => __DIR__ . '/..' . '/php-ai/php-ml/src/NeuralNetwork/Training/Backpropagation/Sigma.php',
        'Phpml\\Pipeline' => __DIR__ . '/..' . '/php-ai/php-ml/src/Pipeline.php',
        'Phpml\\Preprocessing\\Imputer' => __DIR__ . '/..' . '/php-ai/php-ml/src/Preprocessing/Imputer.php',
        'Phpml\\Preprocessing\\Imputer\\Strategy' => __DIR__ . '/..' . '/php-ai/php-ml/src/Preprocessing/Imputer/Strategy.php',
        'Phpml\\Preprocessing\\Imputer\\Strategy\\MeanStrategy' => __DIR__ . '/..' . '/php-ai/php-ml/src/Preprocessing/Imputer/Strategy/MeanStrategy.php',
        'Phpml\\Preprocessing\\Imputer\\Strategy\\MedianStrategy' => __DIR__ . '/..' . '/php-ai/php-ml/src/Preprocessing/Imputer/Strategy/MedianStrategy.php',
        'Phpml\\Preprocessing\\Imputer\\Strategy\\MostFrequentStrategy' => __DIR__ . '/..' . '/php-ai/php-ml/src/Preprocessing/Imputer/Strategy/MostFrequentStrategy.php',
        'Phpml\\Preprocessing\\Normalizer' => __DIR__ . '/..' . '/php-ai/php-ml/src/Preprocessing/Normalizer.php',
        'Phpml\\Preprocessing\\Preprocessor' => __DIR__ . '/..' . '/php-ai/php-ml/src/Preprocessing/Preprocessor.php',
        'Phpml\\Regression\\LeastSquares' => __DIR__ . '/..' . '/php-ai/php-ml/src/Regression/LeastSquares.php',
        'Phpml\\Regression\\Regression' => __DIR__ . '/..' . '/php-ai/php-ml/src/Regression/Regression.php',
        'Phpml\\Regression\\SVR' => __DIR__ . '/..' . '/php-ai/php-ml/src/Regression/SVR.php',
        'Phpml\\SupportVectorMachine\\DataTransformer' => __DIR__ . '/..' . '/php-ai/php-ml/src/SupportVectorMachine/DataTransformer.php',
        'Phpml\\SupportVectorMachine\\Kernel' => __DIR__ . '/..' . '/php-ai/php-ml/src/SupportVectorMachine/Kernel.php',
        'Phpml\\SupportVectorMachine\\SupportVectorMachine' => __DIR__ . '/..' . '/php-ai/php-ml/src/SupportVectorMachine/SupportVectorMachine.php',
        'Phpml\\SupportVectorMachine\\Type' => __DIR__ . '/..' . '/php-ai/php-ml/src/SupportVectorMachine/Type.php',
        'Phpml\\Tokenization\\Tokenizer' => __DIR__ . '/..' . '/php-ai/php-ml/src/Tokenization/Tokenizer.php',
        'Phpml\\Tokenization\\WhitespaceTokenizer' => __DIR__ . '/..' . '/php-ai/php-ml/src/Tokenization/WhitespaceTokenizer.php',
        'Phpml\\Tokenization\\WordTokenizer' => __DIR__ . '/..' . '/php-ai/php-ml/src/Tokenization/WordTokenizer.php',
        'Phpml\\Transformer' => __DIR__ . '/..' . '/php-ai/php-ml/src/Transformer.php',
        'osvgud\\Machine' => __DIR__ . '/../..' . '/src/file2.php',
        'osvgud\\Robot' => __DIR__ . '/../..' . '/src/file1.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c540e9df0fa23da1cb1760f74f735f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c540e9df0fa23da1cb1760f74f735f0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c540e9df0fa23da1cb1760f74f735f0::$classMap;

        }, null, ClassLoader::class);
    }
}
