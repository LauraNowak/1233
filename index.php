<? php
    echo ( "<div style = 'font-size: 30px; margin-bottom: 20px'> <b> Szymon Skalmierski nr26 </b> </div>" );
    echo ( "<hr />" );
    Funkcja  tabelka ( $ ZAPYTANIE , $ nazwa , $ kolumna , $ ROW1 ) {
    $ conn = new mysqli ( "localhost" , "root" , "" , "nauka" );
    $ Wynik = $ conn -> query ( $ ZAPYTANIE );
    echo ( "<div style = 'font-size: 20px; margin-bottom: 5px'> $ nazwa </div>" );
    echo ( "<obramowanie tabeli = 1 style = 'font-size: 20px; margin-bottom: 20px'>" );
        echo ( "<th> $ kolumna </th>" );
        echo ( "<th> Dział </th>" );
            while ( $ row = $ wynik -> fetch_assoc ()) {
                echo ( "<tr>" );
                    echo ( "<td>" . $ row [ $ row1 ]. "</td> <td>" . $ row [ 'dzial' ]. "</td>" );
                echo ( „</tr>” );
            }
    echo ( „</table>” );
    }

    tabelka ( "wybierz avg (zarobki) jako myavg, dzial od grupy pracowników według działu" , "Średnie zarobki pracowników w poszczególnych działach:" , "Średnia" , "myavg" );
    echo ( "<hr />" );
    tabelka ( „wybierz licznik (zarobki) jako moje konto, dzial od pracowników gdzie imie jak„% a ”grupa według dzialu” , „Liczba mężczyzn w poszczególnych działach:” , „Liczba” , „moje konto” );
    echo ( "<hr />" );
    tabelka ( "wybierz max (zarobki) jako mymax, dzial od pracownika gdzie dzial = 2 grupy wg dzialu" , "Maksymalne zarobki z działu 2:" , "Maks" , "mymax" );
    echo ( "<hr />" );
    tabelka ( "wybierz min (zarobki), jak mymin, DZIAL z Pracownicy gdzie imie nie jak '%' grupę o DZIAL" , "Minimalne zarobki mężczyzn" , "Min" , "mymin" );
    echo ( "<hr />" );
    tabelka ( "wybierz sumę (zarobki) jako mysum, dzial od pracownika gdzie dzial = 1 lub dzial = 2 grupa według dzialu" , "Suma zarobków z działu 1 i 2:" , "Suma" , "mysum" );
    echo ( "<hr />" );
    tabelka ( "wybierz avg (zarobki) jako myavg, dzial z grupy pracownicy według dzialu mającego myavg <35" , "Średnie zarobki pracowników w poszczególnych działach mniejsze od 35:" , "Średnia" , "myavg" );
    echo ( "<hr />" );

?>