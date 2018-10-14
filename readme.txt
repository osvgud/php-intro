PHP strict types minusai:
    1.Kodas tampa nebetoks lankstus, sunkiau tampa ji panaudoti kitose srityse
    2.Jeigu turime skaičių ( ar kokį kitą ne string tipą ) ir norime ji spausdinti, reikia ji konvertuoti i stringa
PHP strict types pliusai:
    1.Sumažeja BUG'u tikimybe ( jeigu paduodame kitoki tipa nei nurodyta, gauname error'a )
    2.Nebebutina naudoti PHP-DOC TYPE-HINTS ( Nuo PHP7 ).
    3.Rašomos korektiškesnes programos, kodas tampa lengviau skaitomas
    4.Strict types, nera privaloma, jeigu programuotojui tai nepatinka, arba atrodo kad geriau WEAK TYPES, jis gali naudoti juos.
PHP be strict types minusai:
    1.Yra tikimybe, kad esant nevienodiems tipams, gali buti, kad IF salyga bus tenkinama ir kodas praeis toliau, nors turetu buti priešingai
    ( taip gali buti sukelta didelė žala, nes iškart programuotojas gali nepastebeti, kad toje vietoje yra bug'as )
PHP be strict types pliusai:
    1.Lankstus kodas, galima ji panaudoti daugelyje situaciju ( ar tai nesukels bugu, cia jau kitas klausimas ).
    2.Tipas priskiriamas automatiškai.