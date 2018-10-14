PHP strict types minusai:
    1.Kodas tampa nebetoks lankstus, sunkiau tampa j? panaudoti kitose srityse
    2.Jeigu turime skai?i? ( ar kok? kit? ne string tip? ) ir norime j? spausdinti, reikia j? konvertuoti ? string?
PHP strict types pliusai:
    1.Sumaž?ja BUG'? tikimyb? ( jeigu paduodame kitok? tip? nei nurodyta, gauname error'? )
    2.Nebeb?tina naudoti PHP-DOC TYPE-HINTS ( Nuo PHP7 ).
    3.Rašomos korektiškesn?s programos, kodas tampa lengviau skaitomas
    4.Strict types, n?ra privaloma, jeigu programuotojui tai nepatinka, arba atrodo kad geriau WEAK TYPES, jis gali naudoti juos.
PHP be strict types minusai:
    1.Yra tikimyb?, kad esant nevienodiems tipams, gali b?ti, kad IF s?lyga bus tenkinama ir kodas praeis toliau, nors tur?t? b?ti priešingai
    ( taip gali b?ti sukelta didel? žala, nes iškart programuotojas gali nepasteb?ti, kad toje vietoje yra bug'as )
PHP be strict types pliusai:
    1.Lankstus kodas, galima j? panaudoti daugelyje situacij? ( ar tai nesukels bug?, ?ia jau kitas klausimas ).
    2.Tipas priskiriamas automatiškai.