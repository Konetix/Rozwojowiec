# Rozwojowiec

1. Nie stworzyłem bazy w plikach, w pliku .sql jest tworzenie tabeli. Na moim wykupywanym serwerze nie ma możliwości tworzenia bazy inaczej niż przez DA. Można więc stworzyć bazę danych i podmienić dane w pliku database.php

2.Przy pliku .htaccess.txt należy usunąć ".txt" po wgraniu na serwer. Zawiera on regułę rewrite, która pozwala na dostęp do strony przez wpisanie końcówki adresu zarówno "/rozwojowiec.php" jak i "/rozwojowiec.html" czy "/rozwojowiec".

3.Ciężko mi było zrobić animację dla elementu <tr> tabeli, więc animacja rozwijania się jest tylko przy dodawaniu rekordu (stworzona dość nietypowym sposobem, gdyż nie mogłem inaczej tego zrobić).

4.Projekt korzysta wyłącznie z bilbioteki jQuery.

5.Podczas łączenia się z bazą przez dodawanie lub usuwanie rekordu widoczna jest animacja ładowania na ekranie pokrytym szarą "zakrywką".

6.Nie dbałem za bardzo o ogólny wygląd strony, ponieważ chyba nie o to tutaj chodziło - pokolorowałem jedynie tabelkę.

7.Starałem się dbać o "klasowość" silnika strony, nawet przy pojedynczych funkcjach.

8.Strona ma tylko podstawowe zabezpieczenia i usuwać oraz dodawać może każdy, kto ją odwiedzi.

9.Nie stworzyłem dokumentacji, gdyż nie miałem dostępu do PHPDocumentatora, ale mam nadzieję, że idzie się doczytać kodu.

10.Starałem się dbać o podział ról dla plików, funkcji, klas i ich hierarchi.

11.W pliku js.js, znajduje się ten sam kod, co w js.min.js przed minifikacją.

12.Ujemny rok wydania spowoduje dodanie roku p.n.e.

13.W razie znalezienie bugów, złej optymalizacji, niedociągnięć - proszę o poinformowanie, z pewnością mógłbym to poprawić.

14.Projekt jest rowniez dostepny pod tym adresem http://konetix.pl/pokazy/rozwojowiec

15.Dodatkowo udostepnilem zrzut mojej bazy danych w pliku pod nazwa virt103174_pokaz.sql
