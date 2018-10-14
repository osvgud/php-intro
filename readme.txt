PHP strict types minusai:
    1.Kodas tampa nebetoks lankstus, sunkiau tampa ji panaudoti kitose srityse
    2.Jeigu turime skaičių ( ar kokį kitą ne string tipą ) ir norime ji spausdinti, reikia jį konvertuoti į stringą
PHP strict types pliusai:
    1.Sumažeja BUG'ų tikimybė ( jeigu paduodame kitokį tipą nei nurodyta, gauname error'a )
    2.Nebebūtina naudoti PHP-DOC TYPE-HINTS ( Nuo PHP7 ).
    3.Rašomos korektiškesnes programos, kodas tampa lengviau skaitomas
    4.Strict types, nėra privaloma, jeigu programuotojui tai nepatinka, arba atrodo kad geriau WEAK TYPES, jis gali naudoti juos.
PHP weak types minusai:
    1.Yra tikimybė, kad esant nevienodiems tipams, gali būti, kad IF sąlyga bus tenkinama ir kodas praeis toliau, nors turetų būti priešingai
    ( taip gali buti sukelta didelė žala, nes iškart programuotojas gali nepastebeti, kad toje vietoje yra bug'as )
PHP weak types pliusai:
    1.Lankstus kodas, galima jį panaudoti daugelyje situacijų ( ar tai nesukels bugų, čia jau kitas klausimas ).
    2.Tipas priskiriamas automatiškai.