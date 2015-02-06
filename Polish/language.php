<?php

$lang = array(

//
// Text orientation and encoding
//

'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'pl',

//
// Number and date formatting
//

'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	' ',
'lang_time'							=>	'H:i',
'lang_date'							=>	'd.m.Y',

//
// Notices
//

'Bad request'						=>	'Błędne wywołanie. Odnośnik, który kliknąłeś jest nieprawidłowy, nieaktualny lub po prostu nie masz odpowiednich uprawnień żeby się tu kręcić.',
'No view'							=>	'Nie masz uprawnień do przeglądania tej strony.',
'Bad referrer'						=>	'Złe odniesienie HTTP_REFERER. Próbowałeś się dostać do tej strony z nieautoryzowanego źródła. Jeśli problem nadal występuje, to upewnij się, że \'Adres URL forum\' jest poprawnie ustawiony w menu Ustawienia ogólne/Administracja, oraz że odwiedzasz forum, korzystając z tego adresu URL. Więcej informacji o sprawdzaniu odniesień, możesz znaleźć w dokumentacji ModernBB.',
'No permission'						=>	'Nie masz uprawnień do przeglądania tej strony.',
'No cookie'							=>	'Wygląda na to że zalogowałeś się pomyślnie, jednakże nie udało się zapisać ciasteczka. Sprawdź swoje ustawienia i jeśli to możliwe, włącz zapisywanie ciasteczek dla tej strony.',
'Pun include extension'				=>  'Nie można przetworzyć %s z szablonu %s. Pliki "%s" nie są dozwolone.',  
'Pun include directory'				=>  'Nie można przetworzyć %s z szablonu %s. Przeglądanie katalogu nie jest dozwolone.',  
'Pun include error'					=>  'Nie można przetworzyć %s z szablonu %s. Nie znaleziono takiego pliku zarówno w folderze \'template\', jak i w folderze \'include\'',  
'Settings saved'					=>  'Pomyślnie zapisano ustawienia.',
'User deleted'						=>  'Usunięto użytkownika.',
'User failed'                       =>  'Nie udało się utworzyć użytkownika, ponieważ nie ustalono hasła.',
'User created'                      =>  'Utworzono użytkownika',
'Cache cleared'						=>  'Usunięto pliki pamięci podręcznej.',

//
// Miscellaneous
//

'Announcement'						=>	'Ogłoszenie',
'Options'							=>	'Ustawienia ogólne',
'Features'							=>	'Opcje',
'Submit'							=>	'Wyślij', // "Name" of submit buttons
'Search'							=>	'Szukaj',
'Ban message'						=>	'Zostałeś zablokowany na tym forum.',
'Ban message 2'						=>	'Blokada wygasa:',
'Ban message 3'						=>	'Administrator lub moderator który cię zablokował, zostawił następującą wiadomość:',
'Ban message 4'						=>	'Wszelkie zapytania proszę kierować do Administratora forum, na adres',
'Never'								=>	'Nigdy',
'Today'								=>	'Dziś',
'Yesterday'							=>	'Wczoraj',
'Info'								=>	'Informacja', // A common table header
'Maintenance'						=>	'Konserwacja',
'Invalid email'						=>	'Podany adres e-mail nie jest prawidłowy.',
'Required'							=>	'(Wymagane)',
'required field'					=>	'to pole jest wymagane.', // For javascript form validation
'Last post'							=>	'Ostatni post',
'by'								=>	'przez', // As in last post by some user
'New posts'							=>	'Nowe posty', // The link that leads to the first new post
'New posts info'					=>	'Idź do najnowszego posta w tym temacie.', // The popup text for new posts links
'Username'							=>	'Nazwa użytkownika',
'Password'							=>	'Hasło',
'Send email'						=>	'Wyślij e-mail',
'Moderated by'						=>	'Moderowane przez',
'Registered table'					=>	'Data rejestracji',
'Subject'							=>	'Temat',
'Start typing'                      =>  'Zacznij wpisywać...',
'Message'							=>	'Wiadomość',
'Topic'								=>	'Wątek',
'Forum'								=>	'Forum',
'Posts table'						=>	'Posty',
'Replies forum'						=>	'Odpowiedzi',
'Page'								=>	'Strona %s',
'BBCode'							=>	'BBCode',
'img tag'							=>	'[img]',
'Smilies'							=>	'Emotki',
'and'								=>	'i',
'Image link'						=>	'grafika', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'napisał', // For [quote]'s
'Mailer'							=>	'Automatyczna wiadomość wysłana z %s', // As in "MyForums Mailer" in the signature of outgoing emails
'Spacer'							=>	'…', // Ellipsis for paginate

//
// Title
//

'Title'								=>	'Tytuł',
'Member'							=>	'Użytkownik',
'Moderator'							=>	'Moderator',
'Administrator'						=>	'Administrator',
'Banned'							=>	'Zablokowany',
'Guest'								=>	'Gość',

//
// Stuff for include/parser.php
//

'BBCode error no opening tag'		=>	'[/%1$s] brakuje otwarcia znacznika [%1$s]',
'BBCode error invalid nesting'		=>	'Znacznik [%1$s] został otwarty wewnątrz [%2$s], to nie jest dozwolone',
'BBCode error invalid self-nesting'	=>	'Znacznik [%s] został otwarty wewnątrz siebie, to nie jest dozwolone',
'BBCode error no closing tag'		=>	'[%1$s] brakuje zamknięcia znacznika [/%1$s]',
'BBCode error empty attribute'		=>	'Brak odpowiedniego atrybutu znacznika [%s]',
'BBCode list size error'			=>	'Twoja lista jest zbyt długa do przetworzenia, skróć ją!',

// Stuff for the navigator (top of every page)

//
// User menu
//

'Support'							=>	'Wsparcie',
'Help'								=>	'Pomoc',
'Index'								=>	'Strona główna',
'User list'							=>	'Lista użytkowników',
'Rules'								=>	'Regulamin',
'Register'							=>	'Zarejestruj się',
'Registered'						=>	'Zarejestrowany',
'Login'								=>	'Zaloguj',
'Profile'							=>	'Profil',
'Logout'							=>	'Wyloguj',
'Backstage'							=>	'Zaplecze',
'New posts header'					=>	'Nowe',
'Active topics'						=>	'Aktywne',
'Unanswered topics'					=>	'Bez odpowiedzi',
'Posted topics'						=>	'Moje wątki',
'Show new posts'					=>	'Pokaż wątki z nowymi postami od ostatniej wizyty.',
'Show active topics'				=>	'Pokaż wątki z ostatnio dodanymi postami.',
'Show unanswered topics'			=>	'Pokaż wątki bez odpowiedzi.',
'Show posted topics'				=>	'Pokaż wątki w których brałem udział.',
'Mark as read'						=>	'Oznacz jako przeczytane',
'Title separator'					=>	' / ',

//
// Stuff for the page footer
//

'Moderate topic'					=>	'Moderacja wątku',
'All'								=>	'Pokaż wszystkie posty',
'Move topic'						=>	'Przenieś wątek',
'Open topic'						=>	'Otwórz wątek',
'Close topic'						=>	'Zamknij wątek',
'Unstick topic'						=>	'Odepnij wątek',
'Stick topic'						=>	'Podepnij wątek',
'Moderate forum'					=>	'Moderacja forum',
'Powered by'						=>	'Ta strona działa dzięki %s',
'Thanks'							=>	'Dziękujemy za używanie %s',

//
// Debug information
//

'Debug table'						=>	'Informacje debugowania',
'Querytime'							=>	'Czas generowania: %1$s sekund, wykonano %2$s zapytań',
'Memory usage'						=>	'Wykorzystanie pamięci: %1$s',
'Peak usage'						=>	'(Szczyt: %1$s)',
'Query times'						=>	'Czas (y)',
'Query'								=>	'Zapytań',
'Total query time'					=>	'Ogólny czas zapytań: %s',

//
// First run
//

'First run message'					=>	'Świetnie, że tutaj jesteś. Witamy i dziękujemy za przyłączenie się do nas. Twoje konto jest gotowe i możesz już z niego korzystać. Nie wiesz co dalej? Skorzystaj z naszych propozycji. &rarr;',
'Hi there'							=>	'Witaj, %s',
'Welcome to'						=>	'Witamy na %s',
'Change your avatar'				=>	'Zmień zdjęcie',
'Extend profile'					=>	'Dodaj więcej informacji',
'Get help'							=>	'Przejrzyj pomoc',
'Do not show again'					=>	'Nie pokazuj ponownie',

//
// For extern.php RSS feed
//

'RSS description'					=>	'Ostatnie wątki z %s.',
'RSS description topic'				=>	'Ostatnie posty w %s.',
'RSS reply'							=>	'Odp: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'Kanał RSS aktywne wątki',
'Atom active topics feed'			=>	'Kanał Atom aktywne wątki',
'RSS forum feed'					=>	'Kanał forum RSS',
'Atom forum feed'					=>	'Kanał forum Atom',
'RSS topic feed'					=>	'Kanał RSS wątki',
'Atom topic feed'					=>	'Kanał Atom wątki',

//
// Admin related stuff in the header
//

'New reports'						=>	'Brak nowych zgłoszeń',
'Maintenance mode enabled'			=>	'Tryb konserwacji jest włączony!',

//
// Units for file sizes
//

'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

//
// Language for installation
//

'Choose install language'		=>	'Wybierz język instalacji',
'Choose install language info'	=>	'Język, który będzie wykorzystywany podczas instalacji. Domyślny język używany na forum można wybrać poniżej.',
'Install language'				=>	'Język instalacji',
'Change language'				=>	'Zmień język',
'Already installed'				=>	'Wygląda na to, że już zainstalowano ModernBB. Zapraszamy na <a href="index.php">stronę główną</a> forum.',
'You are running error'			=>	'Na serwerze uruchomiony jest %1$s w wersji %2$s. Do prawidłowego działania ModernBB %3$s wymaga co najmniej %1$s %4$s. Musisz zaktualizować %1$s aby kontynuować.',
'My ModernBB Forum'				=>	'Moje Forum ModernBB',
'Description'					=>	'Możesz robić wszystko',
'Username 1'					=>	'Nazwa użytkownika musi się składać z co najmniej 2 znaków.',
'Username 2'					=>	'Nazwa użytkownika nie może być dłuższa niż 25 znaków.',
'Username 3'					=>	'Nazwa użytkownika \'gość\' jest zarezerwowana.',
'Username 4'					=>	'Nazwy użytkowników nie mogą być w postaci adresu IP.',
'Username 5'					=>	'Nazwy użytkowników nie mogą zawierać znaków \', " i [ lub ].',
'Username 6'					=>	'Nazwy użytkowników nie mogą zawierać żadnych znaczników formatujących (BBCode) używanych na tym forum.',
'Short password'				=>	'Hasło musi się składać z co najmniej 6 znaków.',
'Passwords not match'			=>	'Podane hasła nie są takie same.',
'Wrong email'					=>	'Wpisany adres administratora nie jest prawidłowy.',
'No board title'				=>	'Musisz wpisać nazwę forum.',
'Error default language'		=>	'Nie znaleziono wybranego języka domyślnego.',
'Error default style'			=>	'Nie znaleziono wybranego stylu domyślnego.',
'No DB extensions'				=>	'Instalacja ModernBB wymaga, żeby środowisko PHP wspierało MySQL lub SQLite. W chwili obecnej, nie można dokonać instalacji.',
'Administrator username'		=>	'Nazwa użytkownika',
'Administrator password 1'		=>	'Hasło administratora 1',
'Administrator password 2'		=>	'Hasło administratora 2',
'Administrator email'			=>	'E-mail',
'Board title'					=>	'Nazwa forum',
'Base URL'						=>	'Bez ukośnika',
'Required field'				=>	'to pole jest wymagane.',
'ModernBB Installation'			=>	'Instalacja ModernBB',
'Install'						=>	'Instaluj ModernBB %s',
'Errors'						=>	'Wystąpiły błędy, które muszą być usunięte:',
'Database setup'				=>	'Ustawienia bazy danych',
'Select database'				=>	'Wybierz typ bazy',
'Info 1'						=>	'Jakiej bazy danych chcesz użyć?',
'Database type'					=>	'Typ',
'Info 2'						=>	'Gdzie jest serwer?',
'Info 3'						=>	'Nazwa bazy danych',
'Database server hostname'		=>	'Serwer hosta',
'Database name'					=>	'Nazwa',
'Database enter informations'	=>	'Wpisz użytkownika i hasło do bazy danych',
'Database username'				=>	'Użytkownik',
'Info 4'						=>	'Nazwa użytkownika bazy danych',
'Database password'				=>	'Hasło bazy danych',
'Info 5'						=>	'Pomocne, kiedy chcesz mieć klika instalacji ModernBB w tej bazie danych',
'Table prefix'					=>	'Prefiks tabeli',
'Administration setup'			=>	'Ustawienia administracji',
'Info 6'						=>	'Długość od 2 do 25 znaków',
'Info 7'						=>	'Co najmniej 6 znaków',
'Confirm password'				=>	'Potwierdź hasło',
'Board setup'					=>	'Ustawienia forum',
'Board description'				=>	'Opis forum',
'Appearance'					=>	'Wygląd',
'Default language'				=>	'Domyślny język',
'Default style'					=>	'Domyślny styl',
'Start install'					=>	'rozpocznij instalację',
'DB type not valid'				=>	'\'%s\' jest nieprawidłowym typem bazy danych',
'Table prefix error'			=>	'Prefiks tabeli \'%s\' zawiera niedozwolone znaki lub jest za długi. Prefiks może zawierać litery od a do z, cyfry oraz znak podkreślenia. Prefiks nie może rozpoczynać się cyfrą. Maksymalna długość prefiksu to 40 znaków. Proszę wybrać inny prefiks.',
'Prefix reserved'				=>	'Prefiks tabeli \'sqlite_\' jest zarezerwowany dla silnika SQLite. Proszę wybrać inny prefiks.',
'Existing table error'			=>	'Tabela \'%susers\' jest już obecna w bazie danych \'%s\'. Może to oznaczać, że ModernBB już jest zainstalowany lub zainstalowano inny program, który zajął jedną lub więcej nazw tabel, które są wymagane przez ModernBB. Jeśli chcesz mieć kilka kopii ModernBB w tej samej bazie danych, musisz wybrać inny prefiks tabeli.',
'InnoDB off'					=>	'Wygląda na to, że InnoDB nie jest włączone. Wybierz bazę danych, która nie wymaga obsługi InnoDB albo włącz obsługę InnoDB na twoim serwerze MySQL',
'Administrators'				=>	'Administratorzy',
'Moderators'					=>	'Moderatorzy',
'Guests'						=>	'Goście',
'Members'						=>	'Użytkownicy',
'New member'					=>	'Nowy użytkownik',
'Maintenance message'			=>	'Forum jest aktualnie wyłączone w celach konserwacyjnych. Zapraszamy za klika minut.',
'Alert cache'					=>	'<strong>Folder pamięci podręcznej nie jest zapisywalny!</strong> Do prawidłowego działania ModernBB wymagane jest, żeby folder <em>%s</em> był zapisywalny. Użyj chmod żeby ustawić prawidłowe uprawnienia do tego folderu. Jeśli masz wątpliwości, ustaw chmod 0777.',
'Alert avatar'					=>	'<strong>Folder do przechowywania zdjęć profilowych użytkowników nie jest zapisywalny!</strong> Jeśli chcesz, żeby użytkownicy mogli dodawać swoje zdjęcia profilowe, folder <em>%s</em> musi być zapisywalny. Możesz później wybrać inny folder do zapisywania zdjęć profilowych (zobacz Ustawienia ogólne/Administracja). Użyj chmod żeby ustawić prawidłowe uprawnienia do tego folderu. Jeśli masz wątpliwości, ustaw chmod 0777.',
'Alert upload'					=>	'<strong>Wygląda na to, że dodawanie plików nie jest dozwolone na tym serwerze!</strong> Jeśli chcesz, żeby użytkownicy mogli dodawać swoje zdjęcia profilowe, musisz włączyć opcję file_uploads w PHP. Po tym, jak będzie to zrobione, dodawanie zdjęć profilowych można włączyć w Ustawienia ogólne/Administracja.',
'ModernBB has been installed'	=>	'Zainstalowano ModernBB. Żeby ukończyć instalację, postępuj według instrukcji zamieszczonej poniżej.',
'Info 8'						=>	'Żeby ukończyć instalację, musisz kliknąć na przycisk poniżej i pobrać plik config.php. Następnie, musisz ten plik wrzucić do głównego folderu instalacji ModernBB.',
'Info 9'						=>	'Po tym jak dodasz plik config.php, instalacja ModernBB będzie w pełni ukończona. Jeśli już to zrobiłeś, możesz przejść na <a href="index.php">główną stronę</a> forum.',
'Download config.php file'		=>	'Pobierz plik config.php',
'ModernBB fully installed'		=>	'Pomyślnie zainstalowano ModernBB! Możesz teraz przejść na <a href="index.php">główną stronę</a> forum.',

//
// Language for updating
//

'Update ModernBB'				=>	'Aktualizuj ModernBB',
'Down'							=>	'Forum jest aktualnie wyłączone w celach konserwacyjnych. Zapraszamy za klika minut.',

'Version mismatch error'		=>	'Niezgodność wersji. Baza danych \'%s\' nie odpowiada schematowi bazy danych ModernBB, wspieranemu przez ten skrypt aktualizacji.',
'No update error'				=>	'Twoje forum nie wymaga aktualizacji, ponieważ jest już zainstalowana najnowsza wersja ModernBB',

'Start update'					=>	'Rozpocznij aktualizację',
'Correct errors'				=>	'Wystąpiły błędy, które muszą być usunięte:',
'Successfully updated'			=>	'Baza danych forum, została pomyślnie zaktualizowana. Możesz teraz %s.',
'go to index'					=>	'przejść na stronę główną',

'Preparsing item'				=>	'Przetwarzanie %1$s %2$s …',
'Rebuilding index item'			=>	'Przebudowa indeksu dla %1$s %2$s',

'post'							=>	'postów',
'topic'							=>	'wątków',
'signature'						=>	'podpis',

// Language for frontend

//
// Language for delete.php
//

'Delete post'			=>	'Usuń posta',
'Topic warning'			=>	'Ostrzeżenie! To jest pierwszy post w tym wątku, więc również cały wątek będzie trwale usunięty.',
'Delete info'			=>	'Poniżej znajduje się podgląd posta, wybranego do usunięcia.',
'Reply by'				=>	'Odpowiedź udzielona przez %s - %s',
'Topic by'				=>	'Wątek rozpoczęty przez %s - %s',
'Delete'				=>	'Usuń',

//
// Language for help.php
//

'produces'				=>	'&rarr;',

'BBCode info'			=>	'BBCode jest to zbiór znaczników, które są używane do zmiany wyglądu tekstu na tym forum. Poniżej można znaleźć wszystkie dostępne BBCode oraz sposób ich użycia. Administratorzy mają możliwość wyłączenia korzystania z BBCode. Podczas pisania posta lub edycji swojego podpisu, można zobaczyć, czy korzystanie z danego BBCode jest możliwe.',

'Text style'			=>	'Styl tekstu',
'Text style info'		=>	'Poniższe znaczniki zmieniają wygląd tekstu:',
'Bold text'				=>	'Tekst pogrubiony',
'Underlined text'		=>	'Tekst podkreślony',
'Italic text'			=>	'Tekst pochylony',
'Strike-through text'	=>	'Tekst przekreślony',
'Red text'				=>	'Czerwony tekst',
'Blue text'				=>	'Niebieski tekst',
'Heading text'			=>	'Tekst nagłówka',
'Inserted text'			=>	'Tekst dodany',
'Sub text'				=>	'Indeks dolny',
'Sup text'				=>	'Indeks górny',

'Multimedia'			=>  'Multimedia',
'Links info'			=>	'Możesz tworzyć odnośniki do innych stron, dokumentów lub adresów e-mail korzystając z poniższych znaczników:',
'My email address'		=>	'Mój adres e-mail',
'Images info'			=>	'Jeśli chcesz dodać do posta grafikę, możesz użyć znacznika img. Tekst który jest za znakiem "=", jest to tekst alternatywny (wyświetlany w chwili gdy grafika się nie załaduje) i powinien być dołączany tam gdzie to tylko możliwe.',
'ModernBB bbcode test'  =>  'ModernBB BBCode Test',
'Video info'			=>  'ModernBB obsługuje dodawanie filmów z DailyMotion, Vimeo i YouTube. Używając tego BBCode, możesz dodać film ze wspomnianych wcześniej serwisów.',
'Video link'			=>  'Wstaw tutaj odnośnik do filmu', 

'Quotes'				=>	'Cytowanie',
'Quotes info'			=>	'Jeśli chcesz kogoś zacytować, powinieneś użyć znacznika quote.',
'Quotes info 2'			=>	'Jeśli nie chcesz cytować kogoś konkretnego, możesz użyć znacznika quote bez określania nazwy użytkownika. Jeśli nazwa użytkownika zawiera znaki [ lub ], możesz ją umieścić między znakami cudzysłowu.',
'Quote text'			=>	'To jest tekst który chcę zacytować.',
'produces quote box'	=>	'daje w efekcie taką ramkę z cytatem:',

'Code'					=>	'Kod',
'Code info'				=>	'Kiedy chcesz wyświetlić jakiś kod, powinieneś użyć znacznika code. Tekst wyświetlany za pomocą tego znacznika, będzie używał czcionki o stałej szerokości oraz nie będzie formatowany przez inne znaczniki.',
'Code text'				=>	'Jakiś tam kod.',
'produces code box'		=>	'daje w efekcie takie wyświetlanie kodu:',

'Lists'					=>	'Listy',
'List info'				=>	'Żeby dodać listę, możesz użyć znacznika list. Możesz stworzyć 2 rodzaje list, używając tego znacznika.',
'List text 1'			=>	'Przykładowa pozycja listy 1.',
'List text 2'			=>	'Przykładowa pozycja listy 2.',
'List text 3'			=>	'Przykładowa pozycja listy 3.',
'produces list'			=>	'daje listę punktowaną.',
'produces decimal list'	=>	'daje listę numerowaną.',

'Bold'					=>	'Pogrubienie',
'Underline'				=>	'Podkreślenie',
'Italic'				=>	'Kursywa',
'Strike'				=>	'Przekreślenie',
'URL'					=>	'Odnośnik',
'List'					=>	'Lista',
'List item'				=>	'Punkt listy',
'Heading'				=>	'Nagłówek',
'Inline code'			=>	'Kod',
'Superscript'			=>	'Indeks górny',
'Subscript'				=>	'Indeks dolny',
'Video'					=>	'Wideo',
'Image'					=>	'Grafika',

'Smilies info'			=>	'Jeśli włączono tę funkcję, forum może zamieniać emotki tekstowe na ich graficzne odpowiedniki. Można używać poniższych emotikonek:',

'General use'					=>	'Użytkowanie',
'General use info'				=>	'Podstawowe informacje o korzystaniu z tego forum.',
'Forums and topics'				=>	'Fora i wątki',
'Labels question'				=>	'Co oznaczają etykiety widoczne przed nazwami wątków?',
'Labels info'					=>	'Niektóre z wątków są oznaczone etykietami, każda z nich oznacza coś innego.',
'Label'							=>	'Etykieta',
'Explanation'					=>	'Wyjaśnienie',
'Sticky explanation'			=>	'Przypięte wątki są zwykle ważne i oznacza to, że trzeba się z nimi zapoznać. Zwykle warto do nich zajrzeć.',
'Closed explanation'			=>	'Jeśli przy nazwie wątku pojawia się etykieta \'Zamknięty\', oznacza to, że w takim temacie nie można dodawać postów, chyba że posiada się uprawnienia, które na to pozwalają. Jednakże nadal można przeglądać zawartość takiego wątku',
'Moved explanation'				=>	'Ten wątek został przeniesiony do innego forum. Administratorzy i Moderatorzy  mogą wybrać, czy zostawiać takie powiadomienie czy też nie informować o przeniesieniu wątku. Taki przeniesiony wątek, nie będzie wykazywany w statystykach forum, w którym został pierwotnie umieszczony.',
'Star'							=>	'Gwiazdka',
'Star explanation'				=>	'Obserwujesz ten wątek, będzie on widoczny na liście rzeczy które obserwujesz.',
'Posted explanation'			=>	'Ta etykieta oznacza, że napisałeś posta w tym temacie.',
'Content question'				=>	'Dlaczego nie widzę emotek, podpisów, zdjęć profilowych i grafik?',
'Content answer'				=>	'Możesz zmienić swoje preferencje wyświetlania wątków, w ustawieniach swojego profilu. Możesz tam włączyć wyświetlanie emotek, podpisów, zdjęć profilowych oraz grafik w postach. Jeśli administrator nie wyłączył tych funkcji, domyślnie powinny być one aktywne. To, czy te funkcje są aktywne, możesz poznać po etykietach wyświetlanych pod edytorem. Jeśli mają czerwone tło, oznacza to, że te funkcje nie są dla ciebie dostępne.',
'Topics question'				=>	'Dlaczego nie widzę żadnych wątków i forów?',
'Topics answer'					=>	'Być może nie masz do tego odpowiednich uprawnień. Jeśli chcesz uzyskać więcej informacji, zapytaj się Administratora.',
'Profile question'				=>	'Dlaczego nie widzę żadnych profili?',
'Profile answer'				=>	'Być może nie masz do tego odpowiednich uprawnień. Jeśli chcesz uzyskać więcej informacji, zapytaj się Administratora.',
'Information question'			=>	'Dlaczego w moim profilu nie wyświetla się tyle informacji co w innych?',
'Information answer'			=>	'W twoim profilu wyświetlą się tylko te pola, które są włączone i wypełnione. Może powinieneś sprawdzić czy czegoś nie pominąłeś?',
'Advanced search question'		=>	'Czy jest więcej opcji wyszukiwania?',
'Advanced search answer'		=>	'Kiedy udasz się na stronę wyszukiwania, znajdziesz tam jedno pole, w którym możesz wpisać frazy do wyszukania. tuż pod nim, znajduje się odnośnik do \'Wyszukiwania zaawansowanego\', gdzie możesz znaleźć więcej opcji wyszukiwania. Ta opcja może być niedostępna, jeśli Administrator forum zdecydował się ją wyłączyć.',
'More search question'			=>	'Dlaczego nie mogę szukać na więcej niż jednym forum jednocześnie?',
'More search answer'			=>	'Być może nie masz do tego odpowiednich uprawnień. Jeśli chcesz uzyskać więcej informacji, zapytaj się Administratora.',
'Moderating'					=>	'Moderacja',
'Moderating info'				=>	'Czasami administratorzy i moderatorzy też potrzebują pomocy. Wyjaśniamy tutaj podstawy moderacji.',
'Moderate forum question'		=>	'Jak mogę moderować forum?',
'Moderate forum answer'			=>	'Opcje moderacyjne są dostępne w dolnej części strony. Nie wszystkie opcje są dostępne dla wszystkich moderatorów. Kiedy klikniesz na ten przycisk, zostaniesz przeniesiony na stronę, gdzie będziesz mógł zarządzać bieżącym forum. Możesz tam przenosić, usuwać, łączyć, zamykać i otwierać wiele wątków jednocześnie.',
'Moderate topic question'		=>	'Jak mogę moderować wątek?',
'Moderate topic answer 1'		=>	'Opcje moderacyjne są dostępne w dolnej części strony. Nie wszystkie opcje są dostępne dla wszystkich moderatorów. Kiedy klikniesz na ten przycisk, zostaniesz przeniesiony na stronę, gdzie będziesz mógł zarządzać bieżącym wątkiem. Możesz tam wybierać wiele postów jednocześnie, celu ich usunięcia lub wydzielenia z bieżącego wątku.',
'Moderate topic answer 2'		=>	'Obok przycisku "Moderacja wątku", możesz znaleźć opcje do przenoszenia, otwierania bądź zamykania wątku. Możesz tu także podpinać i odpinać wątki.',
'Moderate user question'		=>	'Jak mogę zarządzać użytkownikiem?',
'Moderate user answer 1'		=>	'Zarządzanie użytkownikiem jest dostępne z poziomu jego profilu, pod zakładką o takiej samej nazwie. Nie wszystkie opcje są dostępne dla wszystkich moderatorów.',
'Moderate user answer 2'		=>	'Strona zarządzania użytkownikiem, pozwala na sprawdzenie notatek o użytkowniku, oraz ich ewentualna zmianę. Można tu także zmienić wyświetlaną wartość liczby postów oraz nadać uprawnienia Moderatora, w oparciu o fora. Jednakże, żeby te uprawnienia zadziałały, użytkownik musi mieć konto w grupie Moderator.',
'Moderate user answer 3'		=>	'W końcu, możesz zablokować bądź usunąć konto użytkownika z poziomu jego profilu. Jeśli chcesz zablokować i/lub usunąć kliku użytkowników jednocześnie, wygodniej będzie skorzystać z narzędzi zarządzania użytkownikami, znajdującymi się na Zapleczu.',

//
// Language for index.php
//

'Topics'		=>	'Wątki',
'Link to'		=>	'Odnośnik:', // As in "Link to: http://modernbb.be/"
'Empty board'	=>	'Forum jest puste.',
'Newest user'	=>	'Najnowszy użytkownik: %s',
'Users online'	=>	'Użytkownicy online: %s',
'Guests online'	=>	'Goście online: %s',
'No of users'	=>	'Użytkowników: %s',
'No of topics'	=>	'Wątków: %s',
'No of post'	=>	'Postów: %s',
'Online'		=>	'Online:', // As in "Online: User A, User B etc."
'Board stats'	=>	'Statystki forum',

//
// Language for login.php
//

'Wrong user/pass'			=>	'Zła nazwa użytkownika i/lub hasło.',
'Forgotten pass'			=>	'Zapomniane hasło',
'No email match'			=>	'Nie ma użytkownika, który zarejestrował się przy użyciu tego adresu e-mail',
'Request pass'				=>	'Odzyskiwanie hasła',
'Remember me'				=>	'Zapamiętaj mnie',
'New password errors'		=>	'Błąd odzyskiwania hasła',
'New passworderrors info'	=>	'Zanim będzie można przesłać nowe hasło, należy usunąć następujące błędy:',

'Forget mail'				=>	'Wysłano e-mail, zawierający instrukcję zmiany hasła. Jeśli nie otrzymasz wiadomości, skontaktuj się z Administratorem, pod adresem',
'Password request flood'	=>  'W ciągu ostatniej godziny, już wysłano żądanie zmiany hasła dla tego konta. Proszę poczekać %s minut, przed wysłaniem kolejnego żądania zmiany hasła.',

//
// Send email
//

'Form email disabled'			=>	'Użytkownik, do którego próbujesz wysłać wiadomość e-mail, nie wyraził chęci na ich otrzymywanie.',
'No email subject'				=>	'Musisz wpisać wątek.',
'No email message'				=>	'Musisz wpisać wiadomość.',
'Too long email message'		=>	'Wiadomość nie może być dłuższa niż 65535 znaków (64 KB).',
'Email flood'					=>  'Musi minąć co najmniej %s sekund, zanim będzie można wysłać następną wiadomość. Proszę poczekać %s sekund i spróbować ponownie.',
'Send email to'					=>	'Wyślij e-mail do',

//
// Report
//

'No reason'						=>	'Musisz wpisać powód zgłoszenia.',
'Reason too long'				=>	'Wiadomość nie może być dłuższa niż 65535 znaków (64 KB).',
'Report flood'					=>  'Musi minąć co najmniej %s sekund, zanim będzie można wysłać następne zgłoszenia. Proszę poczekać %s sekund i spróbować ponownie.',
'Report post'					=>	'Zgłoś posta',
'Reason'						=>	'Powód',
'Reason desc'					=>	'Prosimy wpisać powód, dla którego zgłaszasz tego posta.',

//
// Subscriptions
//

'Not subscribed topic'			=>	'Nie obserwujesz tego wątku.',

//
// General forum and topic moderation
//

'Moderate'						=>	'Moderuj',
'Select'						=>	'Zaznacz', // the header of a column of checkboxes
'Move'							=>	'Przenieś',
'Split'							=>	'Podziel',
'Merge'							=>	'Połącz',

//
// Moderate forum
//

'Open'							=>	'Otwórz',
'Close'							=>	'Zamknij',
'Move topics'					=>	'Przenieś wątki',
'Move to'						=>	'Przenieś do',
'Nowhere to move'				=>	'Nie ma forów do których możesz przenieść wątki.',
'Leave redirect'				=>	'Pozostaw odnośnik do wątku',
'Delete topics'					=>	'Usuwanie wątków',
'Delete topics comply'			=>	'Jesteś pewien, że chcesz usunąć wybrane wątki?',
'No topics selected'			=>	'Musisz wybrać co najmniej jeden wątek, żeby go przenieść/usunąć/otworzyć/zamknąć.',
'Not enough topics selected'	=>	'Musisz wybrać co najmniej dwa wątki, żeby je połączyć.',
'Merge topics'					=>	'Połącz wątki',
'New subject'					=>	'Nowy wątek',

//
// Split multiple posts in topic
//

'Split posts'					=>	'Podziel posty',

//
// Delete multiple posts in topic
//

'Delete posts'					=>	'Usuwanie postów',
'Cannot select first'			=>	'Pierwszy post nie może być wybrany do podzielenia/usunięcia.',
'Delete posts comply'			=>	'Jesteś pewien, że chcesz usunąć wybrane posty?',
'No posts selected'				=>	'Musisz wybrać co najmniej jeden post do podzielenia/usunięcia.',

//
// Get host
//

'Host info 1'					=>	'Adres IP: %s',
'Host info 2'					=>	'Nazwa hosta: %s',
'Show more users'				=>	'Pokaż więcej użytkowników korzystających z tego IP',

//
// Language for post.php and edit.php
// Post validation stuff (many are similiar to those in edit.php)
//

'No subject'		=>	'Wątek musi posiadać temat.',
'No subject after censoring'	=>	'Wątek musi posiadać temat. Po zastosowaniu filtra słów zablokowanych, temat wątku jest pusty.',
'Too long subject'	=>	'Długość tematu nie może przekraczać 70 znaków.',
'No message'		=>	'Musisz wpisać treść wątku.',
'No message after censoring'	=>	'Musisz wpisać treść wątku. Po zastosowaniu filtra słów zablokowanych, treść wątku jest pusta.',
'Too long message'	=>	'Posty nie mogą być większe niż %s bajtów.',
'All caps subject'	=>	'Temat wątku nie może zawierać wyłącznie WIELKICH liter.',
'All caps message'	=>	'Posty nie mogą zawierać wyłącznie WIELKICH liter.',
'Empty after strip'	=>	'Wygląda na to, że post zawierał puste znaczniki BBCode. Może się tak zdarzyć w przypadku odrzucenia znacznika cytatu, ze względu na przekroczenie głębokości cytatu.',

//
// Posting
//

'Post errors'		=>	'Podgląd błędów',
'Post preview'		=>	'Podgląd posta',
'Guest name'		=>	'Gość', // For guests (instead of Username)
'Post a reply'		=>	'Dodaj odpowiedź',
'Post new topic'	=>	'Dodaj wątek',
'Hide smilies'		=>	'Nie pokazuj graficznych emotek w tym poście',
'Subscribe topic'	=>	'Obserwuj ten wątek',
'Stay subscribed'	=>	'Zacznij obserwować ten wątek',
'Topic review'		=>	'Podgląd wątku (najnowsze jako pierwsze)',
'Flood start'		=>  'Musi minąć co najmniej %s sekund, zanim będzie można dodać kolejnego posta. Proszę poczekać %s sekund i spróbować ponownie.',
'Preview'			=>	'Podgląd',

//
// Edit post
//

'Silent edit'		=>	'Cicha edycja (nie wyświetlaj "Ostatnio edytowany przez ..." w widoku wątku)',
'Edit post'			=>	'Edytuj posta',

//
// Language for both profile.php and register.php
//

'Email legend'				=>	'Wpisz prawidłowy adres e-mail',
'Time zone'					=>	'Strefa czasowa',
'DST'						=>	'Zmiana czasu na letni (o 1 godzinę).',
'Time format'				=>	'Format czasu',
'Date format'				=>	'Format daty',
'Default'					=>	'Domyślny',
'Language'					=>	'Język',
'Email setting info'		=>	'Ustawienia e-mail',
'Email setting 1'			=>	'Wyświetlaj mój adres e-mail.',
'Email setting 2'			=>	'Ukrywaj mój adres e-mail ale pozwól na wysyłanie wiadomości.',
'Email setting 3'			=>	'Ukrywaj mój adres e-mail i nie pozwalaj na wysyłanie wiadomości.',

'Username too short'		=>	'Nazwa użytkownika musi się składać z co najmniej 2 znaków. Proszę wybrać inną (dłuższą) nazwę użytkownika.',
'Username too long'			=>	'Nazwa użytkownika nie może być dłuższa niż 25 znaków. Proszę wybrać inną (krótszą) nazwę użytkownika.',
'Username guest'			=>	'Nazwa użytkownika \'gość\' jest zarezerwowana. Proszę wybrać inną nazwę użytkownika.',
'Username IP'				=>	'Nazwy użytkowników nie mogą mieć postaci adresu IP. Proszę wybrać inną nazwę użytkownika.',
'Username reserved chars'	=>	'Nazwy użytkowników nie mogą zawierać znaków \', " i [ lub ]. Proszę wybrać inną nazwę użytkownika.',
'Username BBCode'			=>	'Nazwy użytkowników nie mogą zawierać żadnych znaczników formatujących (BBCode) używanych na tym forum. Proszę wybrać inną nazwę użytkownika.',
'Banned username'			=>	'Nazwa użytkownika, którą podałeś, jest zablokowana na tym forum. Proszę wybrać inną nazwę użytkownika.',
'Pass too short'			=>	'Hasło musi się składać z co najmniej 6 znaków. Proszę wybrać inne (dłuższe) hasło.',
'Pass not match'			=>	'Podane hasła nie są takie same.',
'Banned email'				=>	'Podany adres e-mail, został zablokowany na tym forum. Proszę wybrać inny adres e-mail.',
'Dupe email'				=>	'Ktoś już użył tego adresu e-mail, do rejestracji na tym forum. Proszę wybrać inny adres e-mail.',
'Sig too long'				=>	'Podpis nie może zawierać więcej niż %1$s znaków. Proszę skrócić podpis o %2$s znaków.',
'Sig too many lines'		=>	'Ilość dozwolonych wierszy w podpisie wynosi %s.',
'Bad ICQ'					=>	'Wpisano nieprawidłowy ICQ UIN. Proszę wrócić i dokonać korekty.',

//
// Language for profile.php
//

'Section personality'			=>	'Szczegóły użytkownika',
'Section admin'					=>	'Zarządzaj użytkownikiem',

//
// Miscellaneous
//

'Personal details legend'		=>	'Szczegóły kontaktu',
'User tools'					=>	'Narzędzia',
'Unknown'          				=>  'Nieznany',

//
// Password stuff
//

'Pass key bad'					=>	'Klucz aktywacji hasła jest nieprawidłowy bądź wygasł. Wyślij ponownie prośbę o nowe hasło. Jeśli to zawiedzie, skontaktuj się z Administratorem, pod adresem',
'Pass updated'					=>	'Zaktualizowano hasło. Możesz się teraz zalogować, używając nowego hasła.',
'Wrong pass'					=>	'Stare hasło nie jest prawidłowe.',
'Change pass'					=>	'Zmień hasło',
'Old pass'						=>	'Stare hasło',
'New pass'						=>	'Nowe hasło',
'Confirm new pass'				=>	'Potwierdź nowe hasło',
'Pass info'						=>	'Hasło musi się składać z co najmniej 6 znaków. W haśle jest rozróżniana wielkość znaków',

//
// Email stuff
//

'Email key bad'					=>	'Klucz aktywacji adresu e-mail jest nieprawidłowy bądź wygasł. Wyślij ponownie prośbę o zmianę adresu e-mail. Jeśli to zawiedzie, skontaktuj się z Administratorem, pod adresem',
'Email updated'					=>	'Twój adres e-mail został zmieniony.',
'Activate email sent'			=>	'Wiadomość e-mail, zawierającą instrukcję aktywacji nowego konta, została wysłana na podany adres. w przypadku gdyby wiadomość nie dotarła, skontaktuj się z Administratorem, pod adresem',
'Email instructions'			=>	'Wiadomość e-mail z odnośnikiem aktywacyjnym, została wysłana na nowy adres. Musisz kliknąć na odnośnik w wiadomości, w celu aktywowania nowego adresu.',
'Change email'					=>	'Zmień adres e-mail',
'New email'						=>	'Nowy e-mail',

//
// Avatar upload stuff
//

'Avatars disabled'				=>	'Administrator wyłączył możliwość dodawania zdjęć profilowych.',
'Too large ini'					=>	'Wybrany plik jest był za duży i serwer nie pozwolił na jego dodanie.',
'Partial upload'				=>	'Wybrany plik jest został tylko częściowo dodany. Proszę spróbować ponownie.',
'No tmp directory'				=>	'PHP nie mógł zapisać pliku w folderze tymczasowym.',
'No file'						=>	'Nie wybrano pliku do dodania.',
'Bad type'						=>	'Plik który próbujesz dodać, nie posiada dozwolonego rozszerzenia. Obsługiwane rozszerzenia to gif, jpeg i png.',
'Too wide or high'				=>	'Plik który próbujesz dodać, jest szerszy i/lub wyższy niż dozwolone maksimum',
'Too large'						=>	'Plik który próbujesz dodać, jest większy niż dozwolone maksimum',
'pixels'						=>	'pikseli',
'bytes'							=>	'bajtów',
'Move failed'					=>	'Serwer nie mógł zapisać dodawanego pliku. Skontaktuj się z Administratorem, pod adresem',
'Unknown failure'				=>	'Wystąpił błąd. Proszę spróbować ponownie.',
'Avatar desc'					=>	'Zdjęcie profilowe użytkownika to mała grafika, która będzie wyświetlać się pod twoją nazwą użytkownika, w postach które napisałeś. Zdjęcie nie powinno być większe niż',
'Upload avatar'					=>	'Dodaj zdjęcie',
'Delete avatar'					=>	'Usuń zdjęcie', // only for admins
'File'							=>	'Plik',
'Upload'						=>	'Dodaj', // submit button

//
// Form validation stuff
//

'Forbidden title'				=>	'Tytuł zawiera niedozwolone słowo. Musisz wybrać inny tytuł.',

//
// Profile display stuff
//

'Email info'					=>	'E-mail: %s',
'Last visit info'				=>	'Ostatnio na forum',
'Show posts'					=>	'Pokaż posty',
'Show topics'					=>	'Pokaż wątki',
'Show subscriptions'			=>	'Pokaż obserwowane',
'Contact'						=>	'Kontakt',
'Realname'						=>	'Prawdziwe imię',
'Location'						=>	'Skąd',
'Website'						=>	'Strona internetowa',
'Invalid website URL'			=>	'Podany adres URL nie jest prawidłowy.',
'Microsoft'						=>	'Konto Microsoft',
'Facebook'						=>	'Facebook',
'Twitter'						=>	'Twitter',
'Google+'						=>	'Google+',
'Avatar'						=>	'Zdjęcie',
'Sig max size'					=>	'Maksymalna długość: %s znaków / ilość linii: %s',
'Avatar info'					=>	'Zdjęcie profilowe użytkownika to mała grafika, która będzie wyświetlać się pod twoją nazwą użytkownika, w postach które napisałeś. Możesz dodać swoje zdjęcie, korzystając poniższego odnośnika.',
'Change avatar'					=>	'Zmień zdjęcie',
'Signature info'				=>	'Podpis, jest to blok tekstu, który jest wyświetlany pod twoimi postami. Możesz tam wpisać wszystko co chcesz.. No, prawie wszystko.',
'Sig preview'					=>	'Podgląd obecnego podpisu:',
'No sig'						=>	'Brak podpisu.',
'Signature quote/code/list/h'	=>	'Znaczniki cytowania, kodu, list i tekstu nagłówkowego, nie są dozwolone w podpisach.',
'Posts per page'				=>	'Postów na stronę',
'Topics per page'				=>	'Wątków na stronę',
'Leave blank'					=>	'Pozostaw puste żeby użyć domyślnego',
'Notify full'					=>	'Dołącz wersję tekstową nowych postów, w powiadomieniu o nowych postach w obserwowanych wątkach.',
'Auto notify full'				=>	'Automatycznie dodawaj do obserwowanych wątek w którym napisałem posta.',
'Show smilies'					=>	'Pokazuj graficzne emotki.',
'Show images'					=>	'Pokazuj grafikę w postach.',
'Show images sigs'				=>	'Pokazuj grafikę w podpisach użytkowników.',
'Show avatars'					=>	'Pokazuj w postach zdjęcia użytkowników.',
'Show sigs'						=>	'Pokazuj podpisy użytkowników.',
'Style'							=>	'Styl',
'Backstage Accent'				=>	'Motyw Zaplecza',
'Admin note'					=>	'Notatka administratora',
'Post display'					=>	'Wyświetlanie posta',

//
// Administration stuff
//

'Group membership legend'		=>	'Wybierz grupę użytkownika',
'Save'							=>	'Zapisz',
'Set mods legend'				=>	'Ustawienia moderatora',
'Moderator in info'				=>	'Wybierz fora, którymi będzie mógł zarządzać ten użytkownik. Uwaga: dotyczy to tylko Moderatorów. Administratorzy mają pełne prawa, we wszystkich forach.',
'Update forums'					=>	'Aktualizuj fora',
'Delete ban legend'				=>	'Usuń lub zablokuj użytkownika',
'Delete user'					=>	'Usuń użytkownika',
'Ban user'						=>	'Zablokuj użytkownika',
'Confirm delete user'			=>	'Potwierdź usunięcie użytkownika',
'Confirmation info'				=>	'Potwierdź, że chcesz usunąć użytkownika', // the username will be appended to this string
'Delete warning'				=>	'Ostrzeżenie! Usunięci użytkownicy i/lub ich posty, nie mogą być przywrócone. Jeśli wybrano, żeby nie usuwać postów napisanych przez użytkownika, można je usunąć ręcznie w późniejszym czasie.',
'Delete all posts'				=>	'Usuń posty i wątki napisane przez tego użytkownika',
'No delete admin message'		=>	'Administratorzy nie mogą być usunięci. Jeśli chcesz usunąć tego użytkownika, musisz najpierw przenieść go do innej grupy.',

//
// Language for register.php
//

'No new regs'				=>	'Rejestracja na tym forum jest wyłączona.',
'Forum rules'				=>	'Regulamin forum',
'Rules legend'				=>	'Musisz zgodzić się na poniższy Regulamin, żeby móc kontynuować rejestrację',
'Registration flood'		=>	'W ciągu ostatniej godziny, z tego adresu IP już zarejestrował się nowy użytkownik. Żeby zapobiec masowym rejestracjom, musi upłynąć co najmniej godzina, zanim będzie można zarejestrować konto z tego samego adresu IP. Przepraszamy za utrudnienia.',
'Agree'						=>	'Zgadzam się',
'Cancel'					=>	'Anuluj',
'Register legend'			=>	'Proszę podać wymagane dane',

//
// Form validation stuff (some of these are also used in post.php)
//

'Registration errors'		=>	'Błędy rejestracji',
'Username censor'			=>	'Podana nazwa użytkownika zawiera jeden, bądź kilka niedozwolonych wyrazów. Proszę wybrać inną nazwę.',
'Username dupe 1'			=>	'Ktoś już zarejestrował się pod podaną nazwą użytkownika',
'Username dupe 2'			=>	'Podana nazwa użytkownika jest zbyt podobna. Nazwa musi różnić się co najmniej jednym znakiem alfanumerycznym (a-z lub 0-9). Proszę wybrać inną nazwę.',
'Email not match'			=>	'Podane adres e-mail nie zgadzają się.',

//
// Registration email stuff
//

'Reg email'					=>	'Dziękujemy za rejestrację. Twoje hasło zostało wysłane na podany wcześniej adres. Jeśli wiadomość nie dotrze, możesz skontaktować się z Administratorem, pod adresem',

//
// Register info
//

'Username legend'			=>	'Nazwa użytkownika może zawierać od 2 do 25 znaków',
'Email help info'			=>	'Upewnij się, że podałeś poprawny adres, ponieważ będzie tam wysłane twoje hasło',
'If human'					=>	'Jeśli jesteś człowiekiem, nie wpisuj nic w tym polu!',
'Spam catch'				=>	'Niestety wygląda na to, że to żądanie jest spamem. Jeśli uważasz, że to pomyłka, proszę kierować wszelkie pytania do administratora forum, pod adresem',

//
// Language for search.php
//

'User search'						=>	'Wyszukiwanie użytkowników',
'No search permission'				=>	'Nie masz uprawnień do korzystania z funkcji wyszukiwania.',
'Search flood'						=>  'Musi minąć co najmniej %s sekund, pomiędzy kolejnymi wyszukiwaniami. Proszę poczekać %s sekund i spróbować ponownie.',
'Search criteria legend'			=>	'Wprowadź kryteria wyszukiwania',
'Search info'						=>	'Żeby szukać po słowie kluczowym, wpisz wyrażenie lub wyrażenia, które cię interesują. Poszczególne wyrażenia oddzielaj spacjami. Możesz użyć operatorów wyszukiwania AND, OR i NOT w celu otrzymania bardziej precyzyjnych wyników. Możesz szukać postów na podstawie autora, po prostu wpisz jego nazwę użytkownika. Możesz także użyć * żeby zastąpić ciąg znaków.',
'Keyword search'					=>	'Słowo kluczowe',
'Author search'						=>	'Autor',
'All forums'						=>	'Wszystkie fora',
'Search in'							=>	'Szukaj w',
'Message and subject'				=>	'W treści postów i tytułach wątków',
'Message only'						=>	'Tylko w treści postów',
'Topic only'						=>	'Tylko w tytułach wątków',
'Sort by'							=>	'Sortuj według',
'Sort order'						=>	'Kolejność sortowania',
'Search results info'				=>	'Możesz wybrać, w jaki sposób wyświetlić i posortować wynik wyszukiwania.',
'Sort by post time'					=>	'Czas publikacji',
'Sort by author'					=>	'Autora',
'Ascending'							=>	'Rosnąco',
'Descending'						=>	'Malejąco',
'Show as'							=>	'Pokaż jako',
'Show as posts'						=>	'Posty',
'Advanced search'					=>	'Wyszukiwanie zaawansowane',

//
// Results
//

'Search results'					=>	'Wyniki wyszukiwania',
'Quick search show_new'				=>	'Nowe',
'Quick search show_recent'			=>	'Aktywne',
'Quick search show_unanswered'		=>	'Bez odpowiedzi',
'Quick search show_user_topics'		=>	'Wątki napisane przez %s',
'Quick search show_user_posts'		=>	'Posty napisane przez %s',
'Quick search show_subscriptions'	=>	'Obserwowane przez %s',
'By keywords show as topics'		=>	'Wątki z postami zawierającymi \'%s\'',
'By keywords show as posts'			=>	'Posty zawierające \'%s\'',
'By user show as topics'			=>	'Wątki z postami napisanymi przez %s',
'By user show as posts'				=>	'Posty napisanie przez %s',
'By both show as topics'			=>	'Wątki z postami zawierającymi \'%s\', napisane przez %s',
'By both show as posts'				=>	'Posty zawierające \'%s\', napisane przez %s',
'No terms'							=>	'Żeby coś znaleźć, musisz wpisać co najmniej jedno słowo kluczowe, i/lub autora.',
'No hits'							=>	'Brak wyników do wyświetlenia.',
'No user posts'						=>	'Brak postów tego użytkownika, napisanych w tym forum.',
'No user topics'					=>	'Brak wątków tego użytkownika, napisanych w tym forum.',
'No subscriptions'					=>	'Ten użytkownik nie obserwuje żadnych wątków.',
'No new posts'						=>	'Brak wątków z nowymi postami od twojej ostatniej wizyty. ',
'No recent posts'					=>	'Brak nowych postów, napisanych w ciągu ostatnich 24 godzin.',
'No unanswered'						=>	'Brak nowych postów bez odpowiedzi w tym forum.',
'Go to post'						=>	'Idź do posta',
'Go to topic'						=>	'Idź do wątku',

//
// Language for viewtopic.php
//

'Post reply'		=>	'Dodaj odpowiedź',
'Topic closed'		=>	'Wątek zamknięty',
'From'				=>	'Skąd:', // User location
'IP address logged'	=>	'Log IP',
'Note'				=>	'Notatka:', // Admin note
'Posts'				=>	'Postów:',
'Replies'			=>	'Odpowiedzi:',
'Last edit'			=>	'Ostatnio edytowany przez',
'Report'			=>	'Zgłoś',
'Edit'				=>	'Edytuj',
'Quote'				=>	'Cytuj',
'Is subscribed'		=>	'Dodano do obserwowanych',
'Unsubscribe'		=>	'Przestań obserwować',
'Subscribe'			=>	'Obserwuj',
'Quick post'		=>	'Szybka odpowiedź',
'New icon'			=>	'Nowy post',
'Re'				=>	'Odp:',

//
// Language for userlist.php
//

'User search info'	=>	'Wpisz nazwę użytkownika, którego chcesz znaleźć i/lub wybierz grupę, żeby przefiltrować wynik. Możesz także użyć * żeby zastąpić ciąg znaków.',
'User group'		=>	'Grupa użytkownika',
'No of posts'		=>	'Ilość postów',
'All users'			=>	'Wszyscy użytkownicy',

//
// Language for viewforum.php
//

'Views'			=>	'Wyświetleń',
'Moved'			=>	'Przeniesiony',
'Star'			=>	'Gwiazdka',
'Sticky'		=>	'Przypięty',
'Closed'		=>	'Zamknięty',
'Empty forum'	=>	'Forum jest puste.',

//
// Language for Backstage
// Language for backstage.php
//

'Update settings head'		=>	'Aktualizuj ustawienia',
'Index update check'		=>	'Sprawdzaj aktualizacje za każdym razem jak odwiedzam Zaplecze. Jeśli wyłączono tę opcję, powiadomienia o aktualizacjach nie będą widoczne.',

//
// Language for bans.php
//

'No user message'			=>	'Brak zarejestrowanego użytkownika o tej nazwie. Jeśli chcesz dodać blokadę, nie przypisaną do konkretnej nazwy użytkownika, zostaw to pole puste.',
'No user ID message'		=>	'Brak użytkownika o tym ID.',
'User is admin message'		=>	'Użytkownik %s jest administratorem i nie można go zablokować. Jeśli chcesz go zablokować, musisz najpierw przenieść go do innej grupy.',
'User is mod message'		=>	'Użytkownik %s jest moderatorem i nie można go zablokować. Jeśli chcesz go zablokować, musisz najpierw przenieść go do innej grupy.',
'Must enter message'		=>	'Należy wprowadzić co najmniej nazwę użytkownika, adres IP lub adres e-mail',
'Cannot ban guest message'	=>	'Użytkownik \'Gość\' nie może być zablokowany.',
'Invalid IP message'		=>	'Wpisano nieprawidłowy adres IP lub zakres adresów IP.',
'Invalid e-mail message'	=>	'Podany adres e-mail (np. nazwa@domena.com, lub jego część, np. domena.com), nie jest prawidłowy',
'Invalid date message'		=>	'Wpisano nieprawidłową datę wygaśnięcia.',
'Invalid date reasons'		=>	'Prawidłowy format daty wygląda następująco RRRR-MM-DD oraz musi być to co najmniej jeden dzień do przodu.',

'New ban head'				=>	'Dodaj blokadę',
'Username help'				=>	'Użytkownik do zablokowania',
'Username advanced help'	=>	'Wpisz nazwę użytkownika do zablokowania. Jeśli chcesz zablokować określony adres IP lub zakres adresów IP, zostaw to pole puste.',

'Ban search head'			=>	'Wyszukiwanie blokad',
'Ban search info'			=>	'Szukaj blokad w bazie danych. Możesz wpisać jeden lub kilka warunków.  Możesz także użyć * żeby zastąpić ciąg znaków. Żeby wyświetlić wszystkie blokady, zostaw te pola puste.',
'Date help'					=>	'(rrrr-mm-dd)',
'Expire after label'		=>	'Wygasa po',
'Expire before label'		=>	'Wygasa przed',
'Order by label'			=>	'Sortuj po',
'Order by ip'				=>	'IP',
'Order by expire'			=>	'Dacie wygaśnięcia',
'Submit search'				=>	'Wyszukaj',

'E-mail help'				=>	'E-mail lub domena którą chcesz zablokować',
'IP label'					=>	'Adres IP/zakres adresów IP',
'IP help'					=>	'Adres IP który chcesz zablokować, kolejne adresy oddzielaj spacjami',
'IP help link'				=>	'Kliknij %s, żeby zobaczyć statystyki adresu IP dla tego użytkownika.',
'Ban advanced head'			=>	'Zaawansowane ustawienia blokowania',
'Ban advanced subhead'		=>	'Podaj adres e-mail oraz IP do zablokowania',
'Ban message label'			=>	'Wiadomość dla zablokowanego',
'Ban message help'			=>	'Wiadomość dla zablokowanych użytkowników.',
'Message expiry subhead'	=>	'Wiadomość blokady i jej wygaśnięcie',
'Expire date label'			=>	'Data wygaśnięcia',
'Expire date help'			=>	'Kiedy blokada ma wygasnąć. Pozostaw puste, jeśli blokada ma być zdjęta ręcznie',

'Results head'				=>	'Wyniki wyszukiwania',
'Results IP address head'	=>	'IP/zakres IP',
'Results expire head'		=>	'Wygasa',
'Results banned by head'	=>	'Zablokowany przez',
'No match'					=>	'Brak zgodności',

//
// Language for board.php
//

'Must enter name message'		=>	'Musisz wpisać nazwę',
'Confirm delete cat head'		=>	'Potwierdź usunięcie kategorii',
'Confirm delete cat info'		=>	'Jesteś pewien, że chcesz usunąć kategorię <strong>%s</strong>?',
'Delete category warn'			=>	'Usunięcie kategorii spowoduje także usunięcie istniejących w nim forów i postów!',
'Must enter integer message'	=>	'Wartość pozycji, nie może być ujemna oraz musi być liczbą całkowitą większą od zera ^^.',
'Add categories head'			=>	'Dodaj kategorie',
'Delete categories head'		=>	'Usuń kategorie',
'Edit categories head'			=>	'Edytuj kategorie',
'Category position label'		=>	'Pozycja',
'Category name label'			=>	'Nazwa',

//
// Language fox censoring.php
//

'Must enter word message'	=>	'Musisz wpisać słowo do ocenzurowania.',
'Add word subhead'			=>	'Dodaj słowo',
'Add word info'				=>	'Wpisz słowo, które chcesz cenzurować, a następnie tekst zastępczy dla tego słowa.  Można użyć znaku * w celu zastąpienia ciągu znaków (np. *nie* będzie pasowało zarówno do ładnie jak i niegdyś). Cenzura słów działa także na nazwy użytkowników. Nowi użytkownicy nie będą mogli zarejestrować się, jeśli w podanej przez nich nazwie, będzie występowało jakiekolwiek cenzurowane słowo.  W przypadku cenzurowanych słów, nie jest rozróżniana wielkość znaków.',
'Censoring enabled'			=>	'<strong>Cenzura słów jest włączona w menu %s.</strong>',
'Censoring disabled'		=>	'<strong>Cenzura słów jest wyłączona w menu %s.</strong>',
'Censored word label'		=>	'Słowo do ocenzurowania',
'Replacement label'			=>	'Słowo na które zamienić',
'Edit remove words'			=>	'Edytuj lub usuń słowa',
'No words in list'			=>	'Brak wyrazów cenzurowanych.',

//
// Language fox database.php
//

'Backup options'		=>	'Opcje kopii zapasowej',
'Backup type'			=>	'Typ kopii zapasowej',
'Full'					=>	'Pełna',
'Structure only'		=>	'Tylko struktura',
'Data only'				=>	'Tylko dane',
'Gzip compression'		=>	'Kompresja Gzip',
'Start backup'			=>	'Rozpocznij tworzenie kopii zapasowej',

'Backup info 1'			=>	'Jeśli twój serwer to obsługuje, możesz skorzystać z kompresji gzip, żeby zmniejszyć rozmiar pliku.',

'Restore complete'		=>	'Zakończono przywracanie kopii zapasowej',
'Restore options'		=>	'Opcje przywracania',
'Start restore'			=>	'Rozpocznij przywracanie kopii zapasowej',

'Restore info 1'		=>	'Dzięki tej funkcji, można w pełni przywrócić wszystkie tabele ModernBB, z zapisanego pliku. Jeśli twój serwer to obsługuje, możesz użyć spakowanych plików gzip, będą one rozpakowane automatycznie na serwerze. Przywracanie napisze wszystkie, istniejące dane. Proces przywracania może potrwać kilka minut. Do czasu zakończenia tego procesu, nie przechodź na inną stronę.',

'Warning'				=>	'Ostrzeżenie: funkcje krytyczne dla działania forum',

'Additional functions'	=>	'Dodatkowe funkcje',
'Repair all tables'		=>	'Napraw wszystkie tabele',
'Optimise all tables'	=>	'Optymalizuj wszystkie tabele',

'Additional info 1'		=>	'Dodatkowe funkcje pomagające w utrzymaniu bazy danych, umożliwiające jej naprawę i optymalizację.',

//
// Language for appearance.php, settings.php, email.php and features.php
//

'Bad HTTP Referer message'			=>	'Złe odniesienie HTTP_REFERER. Jeśli przenoszono forum na inne miejsce lub zmieniano domenę, trzeba ręcznie zaktualizować adres URL forum w bazie danych (szukaj wartości o_base_url, w tabeli konfiguracji). Następnie, trzeba wyczyścić pamięć podręczną, poprzez usunięcie wszystkich plików .php w folderze /cache.',
'Must enter title message'			=>	'Musisz wpisać temat.',
'SMTP passwords did not match'		=>	'Musisz dwukrotnie wpisać hasło SMTP, żeby je zmienić.',
'Enter announcement here'			=>	'Wpisz treść ogłoszenia.',
'Enter rules here'					=>	'Wpisz tutaj treść ogłoszenia.',
'Default maintenance message'		=>	'Forum jest chwilowo wyłączone w celach konserwacyjnych. Proszę spróbować ponownie za kilka minut.',
'Timeout error message'				=>	'Wartość "Okresu bezczynności" musi być mniejsza niż wartość "Czasu wygaśnięcia sesji".',

//
// Language for appearance.php
//

'Header appearance'					=>	'Wygląd nagłówka',
'Footer appearance'					=>	'Wygląd stopki',
'Footer'							=>	'Stopka',
'Display head'						=>	'Ustawienia wyświetlania',
'Default style help'				=>	'Styl domyślny będzie używany przez nowych użytkowników i gości. Użytkownicy mogą wybrać swój preferowany styl w ustawieniach profilu, zmiana domyślnego stylu, nie będzie miała na niech wpływu. Można także wymusić używanie stylu, co spowoduje nadpisanie używanego stylu dla wszystkich użytkowników za wyjątkiem gości.',
'About style'						=>	'Informacje o %s',
'version'							=>	'wersja %s',
'Released on'						=>	'Wydano %s',
'Designed for'						=>	'Zaprojektowany dla ModernBB %s do %s',
'Force style'						=>	'Wymuś użycie stylu',
'Set as default'					=>	'Ustaw jako domyślny',
'About'								=>	'Informacje',
'Version number help'				=>	'Pokazuj wersję ModernBB w stopce.',
'Info in posts help'				=>	'Pokazuj informacje o użytkowniku, pod jego nazwą, w widoku wątku.',
'Post count help'					=>	'Pokazuj liczbę postów użytkownika w widoku wątku, profilu i na liście użytkowników.',
'Smilies help'						=>	'Pokazuj graficzne emotki w postach.',
'Smilies sigs help'					=>	'Pokazuj graficzne emotki w podpisach użytkowników.',
'Clickable links help'				=>	'Przekształcaj odnośniki w wersje klikalne.',
'Topic review label'				=>	'Podgląd wątku',
'Topic review help'					=>	'Ilość postów do wyświetlenia w podglądzie',
'Topics per page help'				=>	'Domyślna ilość wątków na stronę',
'Posts per page label'				=>	'Postów na stronę',
'Posts per page help'				=>	'Domyślna ilość postów na stronę',
'Indent label'						=>	'Głębokość wcięcia',
'Index panels head'					=>	'Ustawienia strony głównej',
'Moderated by help'                 =>  'Pokazuj listę "Moderowane przez" kiedy moderatorzy są ustawieni na postawie forów.',
'Index statistics help'				=>	'Pokazuj statystyki na stronie głównej.',
'Indent help'						=>	'Ilość spacji które będą tworzyły wcięcie',
'Quote depth label'					=>	'Maksymalna głębokość cytowania [quote]',
'Quote depth help'					=>	'Maksymalna ilość znaczników [quote] która może być użyta w [quote]',
'Video height'                      =>  'Wysokość wideo',
'Video height help'                 =>  'Wysokość osadzonego wideo',
'Video width'                       =>  'Szerokość wideo',
'Video width help'                  =>  'Szerokość osadzonego wideo',
'Menu items head'					=>	'Dodatkowe pozycje menu',
'Menu items help'					=>	'Ta opcja pozwala na dodanie do menu dodatkowych pozycji, które będą wyświetlały się na każdej stronie. Nowe odnośniki powinny by dodawane w formacie <code>X = &lt;a href="Adres URL odnośnika"&gt;Nazwa odnośnika&lt;/a&gt;</code> X oznacza pozycję, gdzie ma zostać umieszczony odnośnik. Poszczególne pozycje umieszczaj w nowych wierszach.',
'Default menu'						=>	'Domyślne pozycje menu',
'Menu show index'					=>	'Pokazuj odnośnik do strony głównej.',
'Menu show user list'				=>	'Pokazuj odnośnik do listy użytkowników.',
'Menu show search'					=>	'Pokazuj odnośnik do wyszukiwarki.',
'Menu show rules'					=>	'Pokazuj odnośnik do Regulaminu.',
'User profile head'					=>	'Profil użytkownika',
'Title settings head'				=>	'Ustawienia nazwy forum',
'Title in menu'						=>	'Pokazuj w menu nazwę forum .',
'Title in header'					=>	'Pokazuj nazwę forum w nagłówku.',
'Description in header'				=>	'Pokazuj opis forum w nagłówku.',
'Description settings head'			=>	'Ustawienia opisu forum',

//
// Language for email.php
//

'Contact head'						=>	'Ustawienia kontaktu',
'Admin e-mail label'				=>	'E-mail Administratora',
'Admin e-mail help'					=>	'Adres e-mail Administratora',
'Webmaster e-mail label'			=>	'Adres e-mail Webmastera',
'Webmaster e-mail help'				=>	'Adres, z którego będzie rozsyłana korespondencja',
'Subscriptions head'				=>	'Obserwowane',
'Forum subscriptions help'			=>	'Pozwól użytkownikom obserwować fora.',
'Topic subscriptions help'			=>	'Pozwól użytkownikom obserwować wątki.',
'SMTP head'							=>	'Ustawienia SMTP',
'SMTP address label'				=>	'Adres serwera SMTP',
'SMTP address help'					=>	'Adres zewnętrznego serwera SMTP, używanego do wysyłania wiadomości e-mail',
'SMTP username label'				=>	'Nazwa użytkownika SMTP',
'SMTP username help'				=>	'Nazwa użytkownika serwer SMTP, tylko jeśli jest wymagana',
'SMTP password label'				=>	'Hasło SMTP',
'SMTP change password help'			=>	'Zaznacz to, jeśli chcesz zmienić bądź usunąć obecnie zachowane hasło.',
'SMTP password help'				=>	'Hasło i jego potwierdzenie do serwera SMTP, tylko jeśli jest wymagane',
'SMTP SSL help'						=>	'Szyfruj połączenia z serwerem SMTP przy użyciu protokołu SSL, tylko wtedy, gdy wymagane i wspierane.',

//
// Language for features.php
//

'Features head'						=>	'Ustawienia funkcji',
'General'							=>	'Ogólne',
'Topics and posts'					=>	'Wątki i posty',
'User features'						=>	'Opcje użytkownika',
'Search'							=>	'Szukaj',
'Advanced'							=>	'Zaawansowane',
'Quick post help'					=>	'Pokaż szybką odpowiedź w widoku wątku.',
'Responsive post help'              =>  'Pokazuj przyciski "Wyślij" i "Podgląd" w widoku wątku, na małych ekranach. Kiedy ta opcja jest wyłączona, powinna być włączona szybka odpowiedź, żeby umożliwić dodawanie postów użytkownikom, korzystającym z małych ekranów.',
'Users online help'					=>	'Wyświetl na stronie głównej użytkowników aktualnie przeglądających forum.',
'Censor words help'					=>	'Cenzoruj słowa w postach. Zobacz %s, żeby uzyskać więcej informacji.',
'Signatures help'					=>	'Pozwól użytkownikom dołączać podpis do postów.',
'User ranks help'					=>	'Używaj rang użytkowników. Zobacz %s, żeby uzyskać więcej informacji.',
'Topic views help'					=>	'Pokazuj liczbę wyświetleń dla każdego wątku.',
'Has posted help'					=>	'Pokazuj etykietę przed nazwami wątków, w których pisał użytkownik.',
'GZip help'							=>	'Używaj kompresji Gzip. Zredukuje to zużycie transferu, ale zwiększy zużycie CPU.',
'Enable advanced search'			=>	'Pozwól użytkownikom na korzystanie z zaawansowanych opcji wyszukiwania',
'Search all help'					=>	'Pozwól wyszukiwać użytkownikom tylko w 1 forum jednocześnie.',

'First run'							=>	'Pierwsze uruchomienie',
'General settings'					=>	'Ustawienia ogólne',
'Show first run label'				=>	'Pokazuj panel powitalny gdy użytkownik zaloguje się po raz pierwszy.',
'Show guests label'					=>	'Pokazuj panel powitalny gościom, razem formularzem logowania i przyciskiem rejestracji.',
'Welcome text'						=>	'Tekst powitalny',
'First run help message'			=>	'Tekst wyświetlany na środku panelu powitalnego',

//
// Language for forums.php
//

'Post must be integer message'	=>	'Numer pozycji musi być liczbą dodatnią.',
'New forum'						=>	'Nowe forum',

//
// Entry page
//

'Add forum'					=>	'Dodaj forum',
'Update positions'			=>	'Aktualizuj pozycje',
'Confirm delete head'		=>	'Potwierdź usunięcie forum',
'Confirm delete forum info'	=>	'Jesteś pewien, że chcesz usunąć forum <strong>%s</strong>?',
'Confirm delete forum'		=>	'Ostrzeżenie! Usunięcie forum spowoduje także usunięcie istniejących w nim postów!',

//
// Detailed edit page
//

'Edit forum head'			=>	'Edytuj forum',
'Edit details subhead'		=>	'Edytuj szczegóły forum',
'Forum name label'			=>	'Nazwa forum',
'Forum description label'	=>	'Opis',
'Category label'			=>	'Kategoria',
'Sort by label'				=>	'Sortowanie wątków po',
'Topic start'				=>	'Rozpoczęcie wątku',
'User groups'				=>	'Grupy użytkownika',
'Redirect label'			=>	'Adres URL przekierowania',
'Group permissions subhead'	=>	'Edytuj uprawnienia grupy',
'Group permissions info'	=>	'Tutaj możesz ustawić specyficzne uprawnienia dla każdej z grup użytkowników. Administratorzy mają zawsze pełne uprawnienia. Ustawienia uprawnień, które różnią się od domyślnych uprawnień dla grupy użytkowników, są zaznaczone na czerwono. Niektóre uprawnienia są wyłączone w określonych warunkach.',
'Read forum label'			=>	'Czytanie forum',
'Post replies label'		=>	'Dodawanie odpowiedzi',
'Post topics label'			=>	'Tworzenie wątków',
'Revert to default'			=>	'Przywróć wartości domyślne',

//
// Language used in groups.php
//

'Title already exists message'	=>	'Istnieje już grupa z tytułem <strong>%s</strong>.',
'Cannot remove default message'	=>	'Domyślne grupy nie mogą być usunięte. Jeśli chcesz usunąć tę grupę, najpierw musisz ustawić inną grupę jako domyślną.',

'Add group subhead'				=>	'Dodaj nową grupę',
'Create new group'				=>	'Wybierz grupę po której nowa grupa użytkowników odziedziczy ustawienia uprawnień.',
'Default group subhead'			=>	'Grupa domyślna',
'Default group help'			=>	'Jest to domyślna grupa dla nowo zarejestrowanych użytkowników. Nie wszystkie grupy są tutaj widoczne.',
'Existing groups head'			=>	'Istniejące grupy',
'Edit groups info'				=>	'Istniejące grupy nie mogą być usunięte. Jednakże, można je edytować. Proszę zauważyć, że niektóre opcje są niedostępne. Administratorzy mają zawsze pełne uprawnienia.',
'Group delete head'				=>	'Usuwanie grupy',
'Confirm delete info'			=>	'Jesteś pewien, że chcesz usunąć grupę <strong>%s</strong>?',
'Confirm delete warn'			=>	'<b>Ostrzeżenie:</b> Po usunięciu grupy, nie będzie można jej przywrócić.',
'Delete group'					=>	'Usuń grupę',
'Move users info'				=>	'Grupa <strong>%s</strong> posiada obecnie <strong>%s</strong> członków. Proszę wybrać grupę, do której mają zostać przeniesieni użytkownicy.',
'Move users label'				=>	'Przenieś użytkowników do',

'Group settings head'			=>	'Ustawienia grupy',
'Group settings subhead'		=>	'Ustawienia uprawnień i opcji grupy',
'Group settings info'			=>	'Poniższe ustawienia i uprawnienia są domyślne dla grupy użytkownika. Mają zastosowanie wtedy, kiedy forum nie ma ustawionych innych, specyficznych uprawnień.',
'Group title label'				=>	'Tytuł grupy',
'User title label'				=>	'Tytuł użytkownika',
'User title help'				=>	'Tytuł nadpisze rangę użytkownika',
'Mod privileges label'			=>	'Przywileje moderatora',
'Mod privileges help'			=>	'Żeby użytkownik mógł wykorzystać uprawnienia moderatora, musi być przypisany do moderowania jednego lub więcej forów. Można to ustawić w profilu danego użytkownika.',
'Edit profile label'			=>	'Edycja profili użytkownika',
'Edit profile help'				=>	'Jeśli przywileje są włączone, pozwól użytkownikom edytować profile innych użytkowników',
'Rename users label'			=>	'Zmiana nazwy użytkownika',
'Rename users help'				=>	'Jeśli przywileje są włączone, pozwól użytkownikom zmieniać nazwę innych użytkowników',
'Change passwords label'		=>	'Zmienianie haseł',
'Change passwords help'			=>	'Jeśli przywileje są włączone, pozwól użytkownikom zmieniać hasła innych użytkowników',
'Ban users help'				=>	'Jeśli przywileje są włączone, pozwól użytkownikom blokować innych użytkowników',
'Read board label'				=>	'Może przeglądać forum',
'Read board help'				=>	'Jeśli ta opcja jest wyłączona, użytkownik będzie się mógł tylko zalogować i wylogować.',
'View user info label'			=>	'Może przeglądać informacje o użytkownikach',
'View user info help'			=>	'Pozwalaj użytkownikom przeglądać listę użytkowników i ich profile.',
'Post replies help'				=>	'Pozwalaj użytkownikom odpowiadać w wątkach.',
'Post topics help'				=>	'Pozwalaj użytkownikom dodawać nowe wątki.',
'Edit posts label'				=>	'Edycja postów',
'Edit posts help'				=>	'Pozwalaj użytkownikom edytować ich własne posty.',
'Delete posts help'				=>	'Pozwalaj użytkownikom usuwać ich własne posty.',
'Delete topics help'			=>	'Pozwalaj użytkownikom usuwać ich własne wątki (włączając w to odpowiedzi).',
'Set own title label'			=>	'Ustawianie własnego tytułu',
'Set own title help'			=>	'Pozwalaj użytkownikom ustawiać własny tytuł.',
'User search label'				=>	'Wyszukiwanie',
'User search help'				=>	'Pozwalaj użytkownikom na korzystanie z wyszukiwarki.',
'User list search label'		=>	'Wyszukiwanie użytkowników',
'User list search help'			=>	'Pozwalaj użytkownikom na wyszukiwanie na liście użytkowników.',
'Send e-mails label'			=>	'Wysyłanie wiadomości',
'Send e-mails help'				=>	'Pozwalaj użytkownikom na wysyłanie wiadomości e-mail do innych użytkowników.',
'Post flood label'				=>	'Częstość dodawania postów',
'Post flood help'				=>	'Czas, jaki użytkownicy muszą odczekać przed dodaniem kolejnego posta',
'Search flood label'			=>	'Częstość wyszukiwania',
'Search flood help'				=>	'Czas, jaki użytkownicy muszą odczekać przed kolejnym wyszukiwaniem',
'E-mail flood label'			=>	'Częstość wysyłania wiadomości',
'E-mail flood help'				=>	'Czas, jaki użytkownicy muszą odczekać przed wysłaniem kolejnej wiadomości e-mail',
'Report flood label'			=>	'Częstość zgłaszania',
'Report flood help'				=>	'Czas, jaki użytkownicy muszą odczekać przed wysłaniem kolejnego zgłoszenia',
'Moderator info'				=>	'Żeby użytkownik mógł wykorzystać uprawnienia moderatora, musi być przypisany do moderowania jednego lub więcej forów. Można to ustawić w profilu danego użytkownika.',
'seconds'						=>	'sekund',
'pixels'						=>	'pikseli',

//
// Language used in index.php and update.php for Backstage
//

'ModernBB intro'					=>	'Witamy w ModernBB',
'Backup head'						=>	'Kopia zapasowa',
'Backup info'						=>	'Utwórz kopię zapasową bazy danych.',
'Backup button'						=>	'Utwórz kopię zapasową',
'New reports head'					=>	'Nowe zgłoszenia',
'Statistics head'					=>	'Statystyki',
'Updates'							=>	'Aktualizacje',
'View all'							=>	'Zobacz wszystkie',
'posts'								=>	'postów',
'replies'							=>	'odpowiedzi',
'reply'								=>	'odpowiedź',
'topics'							=>	'wątków',
'views'								=>	'wyświetleń',
'view'								=>	'wyświetlono',
'users'								=>	'użytkowników',

'Not available'						=>	'Informacja niedostępna',
'NA'								=>	'nd',
'About head'						=>	'Informacje o ModernBB',
'ModernBB version label'			=>	'Wersja ModernBB',
'ModernBB version data'				=>	'Wersja ModernBB ',
'ModernBB core label'				=>	'Rdzeń ModernBB',
'ModernBB core data'				=>	'Rdzeń ModernBB ',
'Server statistics label'			=>	'Statystyki serwera',
'View server statistics'			=>	'Zobacz statystyki serwera',

'ModernBB software updates'			=>	'Aktualizacje skryptu ModernBB',
'ModernBB updates'					=>	'Aktualizacje ModernBB',
'Check for updates'					=>	'Sprawdź czy są aktualizacje',
'New version'						=>	'Czas na aktualizację, nowa wersja jest już dostępna',
'Latest version'					=>	'Dziękujemy za używanie najnowszej wersji ModernBB',
'Development version'				=>	'Używasz wydania developerskiego',

'Reset head'						=>	'Funkcje resetowanie ModernBB',
'Soft reset'						=>	'Miękki reset',
'Soft reset help'					=>	'Poniższy przycisk spowoduje usunięcie pliku config.php, co spowoduje rozpoczęcie instalacji ModernBB. Użycie tej opcji, nie spowoduje usunięcia bazy danych. Funkcja ta, może okazać się przydatna w przypadku uszkodzenia pliku config.php. Uwaga, tych zmian nie można cofnąć. Zanim użyjesz tej funkcji, zalecane jest wykonanie kopii zapasowej.',
'Hard reset'						=>	'Twardy reset',
'Reset config'						=>	'Resetuj config.php',
'Hard reset help'					=>	'Poniższy przycisk spowoduje usunięcie pliku config.php oraz bazy danych, co spowoduje rozpoczęcie instalacji ModernBB. Stracisz wszystkie dane. Uwaga, tych zmian nie można cofnąć. Zanim użyjesz tej funkcji, zalecane jest wykonanie kopii zapasowej.',
'Reset'								=>	'Reset',

//
// Reports
//

'Date and time'						=>	'Data i czas',
'No new reports'					=>	'Brak nowych zgłoszeń.',

//
// Language for maintenance.php
//

'Rebuild index subhead'			=>	'Przebuduj indeks wyszukiwania',
'Rebuild index info'			=>	'Jeśli zmieniano coś w wątkach i postach w bazie danych, powinno się przebudować indeks wyszukiwania. Na czas przebudowy, zaleca się aktywować %s. Ten proces może potrwać klika minut oraz zwiększyć obciążenie serwera!',
'Posts per cycle label'			=>	'Postów na cykl',
'Posts per cycle help'			=>	'Ilość postów na cykl, zapobiega to  wygaśnięciu sesji, zalecana wartość to 300',
'Starting post label'			=>	'ID pierwszego posta',
'Starting post help'			=>	'ID posta, od którego rozpocząć przebudowę, domyślnie jest to pierwsze ID znalezione w bazie danych',
'Empty index label'				=>	'Opróżnij indeks',
'Empty index help'				=>	'Wybierz tę opcję jeśli chcesz wyczyścić indeks wyszukiwania przez przebudową (zobacz niżej).',
'Rebuild completed info'		=>	'Upewnij się że JavaScript jest włączony na czas przebudowy (automatyczne rozpoczynanie cyklu). Jeśli występuje potrzeba przerwania procesu, zapamiętaj ID ostatniego posta. Następnie, jeśli chcesz kontynuować w polu "ID pierwszego posta" wpisz wartość ID+1 (Odznacz opcję  "Opróżnij indeks").',
'Rebuild index'					=>	'Przebuduj indeks',
'Rebuilding search index'		=>	'Przebudowa indeksu wyszukiwania w toku',
'Rebuilding index info'			=>	'Przebudowa indeksu. To jest odpowiedni moment, na przerwę z kubkiem kawy :-)',
'Processing post'				=>	'Przetwarzanie posta <strong>%s</strong> …',
'Click here'					=>	'Kliknij tutaj',
'Javascript redirect failed'	=>	'Nieudane przekierowanie JavaScript. %s żeby kontynuować …',
'Posts must be integer message'	=>	'Wartość "Postów na cykl" musi być dodatnia.',
'Days must be integer message'	=>	'Wartość "Starsze niż … dni" musi być dodatnia.',
'No old topics message'			=>	'Nie ma wątków starszych niż %s dni. Proszę zmniejszyć tę wartość i spróbować ponownie.',
'Prune subhead'					=>	'Wyczyść stare posty',
'Days old label'				=>	'Starsze niż … dni',
'Days old help'					=>	'Jak stare muszą być wątki, żeby je wyczyścić',
'Prune sticky label'			=>	'Czyść podpięte wątki',
'Prune from label'				=>	'Czyść w forum',
'Prune from help'				=>	'Co chcesz wyczyścić?',
'Prune info'					=>	'Podczas czyszczenia wątków, zaleca się aktywować %s.',
'Confirm prune subhead'			=>	'Potwierdź czyszczenie wątków',
'Confirm prune info'			=>	'Jesteś pewien, że chcesz wyczyścić wszystkie wątki, starsze niż %s dni z %s (wątków: %s).',
'Confirm prune warn'			=>	'OSTRZEŻENIE! Czyszczenie postów oznacza usuwa je na stałe.',

'Prune users head'			=>	'Czyszczenie użytkowników',
'Prune by'					=>	'Czyść na podstawie',
'Registed date'				=>	'Daty rejestracji',
'Last login'				=>	'Ostatniego logowania',
'Prune by info'				=>	'Co brać pod uwagę podczas czyszczenia?',
'Minimum days'				=>	'Minimalna ilość dni od rejestracji/ostatniego logowania',
'Minimum days info'			=>	'Minimalna ilość dni od wydarzenia określonego powyżej',
'Maximum posts'				=>	'Maksymalna ilość postów',
'Maximum posts info'		=>	'Ile postów musi mieć użytkownik, żeby nie go nie wyczyścić',
'Delete admins'				=>	'Usuwaj administratorów i moderatorów',
'User status'				=>	'Status użytkownika',
'Delete any'				=>	'Usuwaj wszystkich',
'Delete only verified'		=>	'Usuwaj tylko zweryfikowanych',
'Delete only unverified'	=>	'Usuwaj tylko niezweryfikowanych',

//
// Language for settings.php
//

'Options head'						=>	'Ustawienia ogólne',

//
// Essentials section
//

'Essentials subhead'				=>	'Podstawowe',
'Board desc help'					=>	'O czym jest to forum?',
'Base URL label'					=>	'Adres URL forum',
'Base URL problem'					=>  'Twój serwer nie obsługuje automatycznej konwersji narodowych nazw domen, zawierających znaki specjalne. Jeśli adres URL forum zawiera takie znaki, <strong>musisz</strong> skorzystać z konwertera online.',
'Timezone label'					=>	'Domyślna strefa czasowa',
'DST help'							=>	'Przesuń czas o 1 godzinę do przodu (czas letni).',
'Language help'						=>	'Domyślny język',

//
// Essentials section timezone options
//

'UTC-12:00'							=>	'(UTC-12:00) Międzynarodowa linia zmiany daty Zachód',
'UTC-11:00'							=>	'(UTC-11:00) Niue, Samoa',
'UTC-10:00'							=>	'(UTC-10:00) Hawaje-Aleuty, Wyspy Cooka',
'UTC-09:30'							=>	'(UTC-09:30) Markizy',
'UTC-09:00'							=>	'(UTC-09:00) Alaska, Wyspy Gambiera',
'UTC-08:30'							=>	'(UTC-08:30) Pitcairn',
'UTC-08:00'							=>	'(UTC-08:00) Pacyficzny',
'UTC-07:00'							=>	'(UTC-07:00) Górski',
'UTC-06:00'							=>	'(UTC-06:00) Środkowy, Meksyk',
'UTC-05:00'							=>	'(UTC-05:00) Wschodni, Bogota, Lima',
'UTC-04:00'							=>	'(UTC-04:00) Atlantycki, Caracas, La Paz',
'UTC-03:30'							=>	'(UTC-03:30) Nowa Fundlandia',
'UTC-03:00'							=>	'(UTC-03:00) Amazonia, Grenlandia Centralna',
'UTC-02:00'							=>	'(UTC-02:00) Środkowy Atlantyk',
'UTC-01:00'							=>	'(UTC-01:00) Azory, Cape Verde, Wschodnia Grenlandia',
'UTC'								=>	'(UTC) Europa Zachodnia, Greenwich',
'UTC+01:00'							=>	'(UTC+01:00) Europa Centralna, Afryka Zachodnia',
'UTC+02:00'							=>	'(UTC+02:00) Europa Wschodnia, Afryka Centralna',
'UTC+03:00'							=>	'(UTC+03:00) Afryka Wschodnia',
'UTC+03:30'							=>	'(UTC+03:30) Iran',
'UTC+04:00'							=>	'(UTC+04:00) Moskwa, Zatoka Perska, Samara',
'UTC+04:30'							=>	'(UTC+04:30) Afganistan',
'UTC+05:00'							=>	'(UTC+05:00) Pakistan',
'UTC+05:30'							=>	'(UTC+05:30) Indie, Sri Lanka',
'UTC+05:45'							=>	'(UTC+05:45) Nepal',
'UTC+06:00'							=>	'(UTC+06:00) Bangladesz, Bhutan, Jekaterynburg',
'UTC+06:30'							=>	'(UTC+06:30) Wyspy Kokosowe, Mjanma',
'UTC+07:00'							=>	'(UTC+07:00) Indochiny, Nowosybirsk',
'UTC+08:00'							=>	'(UTC+08:00) Chiny, Australia Zachodnia, Krasnojarsk',
'UTC+08:45'							=>	'(UTC+08:45) Australia Południowo-wschodnia i Zachodnia',
'UTC+09:00'							=>	'(UTC+09:00) Japonia, Korea, Chita, Irkuck',
'UTC+09:30'							=>	'(UTC+09:30) Australia Centralna',
'UTC+10:00'							=>	'(UTC+10:00) Australia Wschodnia',
'UTC+10:30'							=>	'(UTC+10:30) Lord Howe',
'UTC+11:00'							=>	'(UTC+11:00) Wyspy Salomona, Władywostok',
'UTC+11:30'							=>	'(UTC+11:30) Norfolk',
'UTC+12:00'							=>	'(UTC+12:00) Nowa Zelandia, Fidżi, Magadan',
'UTC+12:45'							=>	'(UTC+12:45) Wyspy Chatham',
'UTC+13:00'							=>	'(UTC+13:00) Tonga, Feniks, Kamczatka',
'UTC+14:00'							=>	'(UTC+14:00) Wyspy Line',

//
// Timeout Section
//

'Timeouts subhead'					=>	'Ustawienia czasu',
'PHP manual'						=>	'Podręcznik PHP',
'Time format help'					=>	'Teraz: %s. Zobacz %s żeby uzyskać więcej informacji',
'Date format help'					=>	'Teraz: %s. Zobacz %s żeby uzyskać więcej informacji',
'Visit timeout label'				=>	'Czas wygaśnięcia sesji',
'Visit timeout help'				=>	'Czas jaki musi upłynąć, kiedy użytkownik jest nieaktywny, żeby jego sesja wygasła',
'Online timeout label'				=>	'Okres bezczynności',
'Online timeout help'				=>	'Czas po którym użytkownik zostaje usunięty z listy użytkowników online',

//
// Feeds section
//

'Feed subhead'						=>	'Ustawienia kanału RSS/Atom',
'Default feed label'				=>	'Domyślny typ kanału',
'Default feed help'					=>	'Wybierz kanał',
'None'								=>	'Żaden',
'RSS'								=>	'RSS',
'Atom'								=>	'Atom',
'Feed TTL label'					=>	'Czas przechowywania kanałów',
'Feed TTL help'						=>	'Redukuje zużycie zasobów, przez zapisywanie kanałów w pamięci podręcznej.',
'No cache'							=>	'Nie przechowuj w pamięci podręcznej',
'Minutes'							=>	'%d minut',

//
// Reports section
//

'Reporting method label'			=>	'Metoda zgłaszania',
'Internal'							=>	'Wewnętrzna',
'Both'								=>	'Obie',
'Reporting method help'				=>	'Jak traktować zgłoszenia?',
'Mailing list label'				=>	'Lista dystrybucyjna',
'Mailing list help'					=>	'Lista użytkowników, oddzielonych przecinkami, którzy zostaną powiadomieni o nowym zgłoszeniu',

//
// Avatars section
//

'Avatars subhead'					=>	'Zdjęcia profilowe',
'Use avatars label'					=>	'Używaj zdjęć profilowych',
'Use avatars help'					=>	'Jeśli włączono, użytkownicy będą mogli dodawać swoje zdjęcia profilowe.',
'Upload directory label'			=>	'Folder do przechowywania zdjęć',
'Upload directory help'				=>	'Miejsce na serwerze, gdzie będą przechowywane zdjęcia profilowe użytkowników. Wymagane prawa dostępu do folderu, umożliwiające zapisywanie (chmod 0777)',
'Max width label'					=>	'Maksymalna szerokość',
'Max height label'					=>	'Maksymalna wysokość',
'Max size label'					=>	'Maksymalny rozmiar',

//
// Registration Section
//

'Allow new label'					=>	'Pozwól na rejestrację',
'Allow new help'					=>	'Zezwalaj na rejestrację nowych użytkowników na forum.',
'Verify label'						=>	'Weryfikacja przy rejestracji',
'Verify help'						=>	'Wysyła losowe hasło na podany adres e-mail, w celu jego weryfikacji.',
'Report new label'					=>	'Powiadamiaj o rejestracjach',
'Report new help'					=>	'Wysyłanie powiadomienia o nowych rejestracjach, na adresy znajdujące się na liście dystrybucyjnej',
'Use rules label'					=>	'Regulamin forum',
'Use rules help'					=>	'Wymaga wyrażenia zgody na postanowienia Regulaminu. Dodatkowo odnośnik do Regulaminu, pojawia się w menu nawigacyjnym.',
'Rules label'						=>	'Regulamin',
'Rules help'						=>	'Wpisz tutaj treść regulaminu lub inne przydatne informacje, wymagane gdy ta funkcja jest aktywna',
'E-mail default label'				=>	'Domyślne ustawienia e-mail',
'E-mail default help'				=>	'Domyślne ustawienia prywatności dla nowych użytkowników',
'Display e-mail label'				=>	'Wyświetlaj adres e-mail.',
'Hide allow form label'				=>	'Ukrywaj adres e-mail ale pozwól na wysyłanie wiadomości.',
'Hide both label'					=>	'Ukrywaj adres e-mail i nie pozwalaj na wysyłanie wiadomości.',

//
// Announcement Section
//

'Announcements'				=>	'Ogłoszenia',
'Display announcement help'			=>	'Włącz tę opcję, żeby wyświetlić poniższą wiadomość na stronie.',

//
// Maintenance Section
//

'Maintenance mode help'				=>	'Włącz tę opcję, żeby aktywować tryb konserwacyjny. W tym czasie forum będzie dostępne tylko dla administratorów. Nie wylogowuj się, gdy ta funkcja jest aktywna!',
'Maintenance message help'			=>	'Wiadomość dla użytkowników o trwającej przerwie',
'Cache'								=>	'Pamięć podręczna',
'Cache info'						=>	'Usuń zawartość pamięci podręcznej żeby pobrać najnowsze dane z bazy',
'Clear cache'						=>	'Wyczyść pamięć podręczną',

//
// Language for permissions.php
//

'All caps'					=>	'Wielkie litery',
'Posting subhead'			=>	'Pisanie postów',
'BBCode help'				=>	'Zezwól na używanie BBCode w postach (zalecane).',
'Image tag help'			=>	'Zezwól na używanie znacznika BBCode [img] w postach.',
'All caps message help'		=>	'Zezwól na posty, zawierające wyłącznie WIELKIE litery.',
'All caps subject help'		=>	'Zezwól na nazwy wątków, zawierające wyłącznie WIELKIE litery.',
'Require e-mail help'		=>	'Wymagaj od gości podania adresu e-mail, przy publikacji posta.',
'Signatures subhead'		=>	'Podpisy',
'BBCode sigs help'			=>	'Zezwól na używanie BBCode w podpisach użytkowników.',
'Image tag sigs help'		=>	'Zezwól na używanie znacznika BBCode [img] w podpisach użytkowników (nie zalecane).',
'All caps sigs help'		=>	'Zezwól na podpisy użytkowników, zawierające wyłącznie WIELKIE litery.',
'Max sig length label'		=>	'Maksymalna długość podpisu',
'Max sig length help'		=>	'Maksymalna liczba znaków, jaką może zawierać podpis',
'Max sig lines label'		=>	'Maksymalna ilość wierszy w podpisie',
'Max sig lines help'		=>	'Określa, ile maksymalnie wierszy, może zawierać podpis użytkownika',
'Banned e-mail help'		=>	'Zezwalaj użytkownikom na używanie zablokowanych adresów e-mail. W przypadku użycia, zostanie wysłane powiadomienie, na adresy znajdujące się na liście dystrybucyjnej.',
'Duplicate e-mail help'		=>	'Zezwalaj użytkownikom na używanie już wykorzystanych adresów e-mail. W przypadku użycia, zostanie wysłane powiadomienie, na adresy znajdujące się na liście dystrybucyjnej.',

//
// Language for ranks.php
//

'Must be integer message'	=>	'Wartość minimalnej liczby postów, nie może być ujemna oraz musi być liczbą całkowitą większą od zera ^^.',
'Dupe min posts message'	=>	'Już istnieje ranga z minimalną ilością postów, wynoszącą: %s.',
'Add rank subhead'			=>	'Dodaj rangę',
'Ranks disabled'			=>	'<strong>Rangi są wyłączone w %s.</strong>',
'Rank title label'			=>	'Tytuł rangi',
'Minimum posts label'		=>	'Minimalna ilość postów',
'Edit remove subhead'		=>	'Edytuj/usuń rangi',
'No ranks in list'			=>	'Brak dostępnych rang',

//
// Language for reports.php
//

'Deleted user'				=>	'Usunięty użytkownik',
'Deleted'					=>	'Usunięty',
'Post ID'					=>	'Post #%s',
'Reported by'				=>	'Zgłaszający',
'Actions'					=>	'Akcje',
'Zap'						=>	'Oznacz jako przeczytane',
'Last 10 head'				=>	'10 ostatnio przeczytanych zgłoszeń',
'Readed by'					=>	'Oznaczone jako przeczytane przez',
'No zapped reports'			=>	'Brak nieprzeczytanych zgłoszeń.',

//
// Language for statistics.php
//

'PHPinfo disabled message'			=>	'Funkcja PHP - phpinfo() jest wyłączona na tym serwerze.',
'Server statistics head'			=>	'Statystyki serwera',
'Server load label'					=>	'Obciążenie serwera',
'Server load data'					=>	'%s - Użytkownicy online: %s',
'Environment label'					=>	'Środowisko',
'Environment data OS'				=>	'System operacyjny: %s',
'Show info'							=>	'Pokaż info',
'Environment data version'			=>	'PHP: %s - %s',
'Environment data acc'				=>	'Akcelerator: %s',
'Turck MMCache'						=>	'Turck MMCache',
'Turck MMCache link'				=>	'turck-mmcache.sourceforge.net/',
'ionCube PHP Accelerator'			=>	'ionCube PHP Accelerator',
'ionCube PHP Accelerator link'		=>	'www.php-accelerator.co.uk/',
'Alternative PHP Cache (APC)'		=>	'Alternative PHP Cache (APC)',
'Alternative PHP Cache (APC) link'	=>	'www.php.net/apc/',
'Zend Optimizer'					=>	'Zend Optimizer',
'Zend Optimizer link'				=>	'www.zend.com/products/guard/zend-optimizer/',
'eAccelerator'						=>	'eAccelerator',
'eAccelerator link'					=>	'www.eaccelerator.net/',
'XCache'							=>	'XCache',
'XCache link'						=>	'xcache.lighttpd.net/',
'Database label'					=>	'Baza danych',
'Database data rows'				=>	'Wierszy: %s',
'Database data size'				=>	'Rozmiar: %s',

//
// Language for users.php
//

'Non numeric message'		=>	'Wpisano wartość nie numeryczną w kolumnę numeryczną.',
'Invalid date time message'	=>	'Wpisano nieprawidłową datę/czas.',
'Not verified'				=>	'Nie zweryfikowano',

//
// Actions: mass delete/ban etc.
//

'No users selected'			=>	'Nie wybrano użytkowników.',
'No move admins message'	=>	'Ze względów bezpieczeństwa, nie można przenosić jednocześnie wielu administratorów do innej grupy. Jeśli chcesz przenieść tych administratorów, możesz to zrobić z poziomu ich profili.',
'No delete admins message'	=>	'Administratorzy nie mogą być usunięci. Jeśli chcesz usunąć tych użytkowników, musisz najpierw przenieść ich do innej grupy',
'No ban admins message'		=>	'Administratorzy nie mogą być zablokowani. Jeśli chcesz zablokować tych użytkowników, musisz najpierw przenieść ich do innej grupy.',
'No ban mods message'		=>	'Moderatorzy nie mogą być zablokowani. Jeśli chcesz zablokować tych użytkowników, musisz najpierw przenieść ich do innej grupy.',
'Move users'				=>	'Zmień grupę użytkownika',
'New group label'			=>	'Nowa grupa',
'New group help'			=>	'Wybierz nową grupę użytkownika',
'Invalid group message'		=>	'Nieprawidłowy ID grupy.',
'Delete users'				=>	'Usuń użytkowników',
'Ban users'					=>	'Blokowanie użytkowników',
'Ban IP label'				=>	'Zablokuj adresy IP',
'Ban IP help'				=>	'Blokuj także adresy IP zablokowanych użytkowników, żeby utrudnić im tworzenie nowych kont.',

'E-mail address label'		=>	'Adres e-mail',
'Real name label'			=>	'Prawdziwe imię',
'Signature'					=>	'Podpis',
'Posts more than label'		=>	'Ilość postów większa niż',
'Posts less than label'		=>	'Ilość postów mniejsza niż',
'Last post after label'		=>	'Ostatni post napisany po',
'Last post before label'	=>	'Ostatni post napisany przed',
'Last visit after label'	=>	'Ostatnio na forum po',
'Last visit before label'	=>	'Ostatnio na forum przed',
'Registered after label'	=>	'Rejestracja po',
'Registered before label'	=>	'Rejestracja przed',
'Order by posts'			=>	'Ilości postów',
'Order by last visit'		=>	'Dacie ostatniej wizyty',
'Order by registered'		=>	'Dacie rejestracji',
'All groups'				=>	'Wszystkie grupy',
'Unverified users'			=>	'Użytkownicy niezweryfikowani',
'IP search head'			=>	'Wyszukiwanie po adresie IP',
'IP address label'			=>	'Adres IP',
'IP address help'			=>	'Podaj adres IP który chcesz wyszukać w bazie danych postów.',
'Find IP address'			=>	'Znajdź adres IP',

'Results title head'		=>	'Tytuł/Status',
'Results posts head'		=>	'Postów',
'Results last used head'	=>	'Ostatnio użyty',
'Results times found head'	=>	'Znaleziony',
'Results find more link'	=>	'Znajdź więcej użytkowników, korzystających z tego IP',
'Results no posts found'	=>	'Nie ma postów napisanych przez tego użytkownika.',
'Ban'						=>	'Blokada',
'Change group'				=>	'Zmień grupę',
'Bad IP message'			=>	'Podany adres IP nie ma prawidłowego formatu.',
'Results view IP link'		=>	'Statystyki IP',
'Results no IP found'		=>	'Nie można odnaleźć podanego adresu IP w bazie danych.',

//
// Create new user
//

'Add user head'				=>	'Dodaj użytkownika',
'Random password info'		=>	'Wygeneruj losowe hasło, które będzie wysłane na podany wyżej adres. Jeśli zaznaczono, nie wypełniaj pola "Hasło".',

//
// Common language used in /backstage/
// Main menu
//

'Content'				=>	'Zawartość',
'Forums'				=>	'Fora',
'Forum settings'		=>	'Ustawienia forum',
'Categories'			=>	'Kategorie',
'Board'					=>	'Forum',
'Board structure'		=>	'Układ forum',
'Censoring'				=>	'Cenzura słów',
'Reports'				=>	'Zgłoszenia',
'Users'					=>	'Użytkownicy',
'Ranks'					=>	'Rangi',
'Groups'				=>	'Grupy',
'Permissions'			=>	'Uprawnienia',
'Bans'					=>	'Blokady',
'Settings'				=>	'Ustawienia',
'Global'				=>	'Ogólne',
'Registration'			=>	'Rejestracja',
'Email'					=>	'E-mail',
'Database'				=>	'Zarządzanie bazą danych',
'Backstage settings'	=>	'Ustawienia Zaplecza',
'Extensions'			=>	'Rozszerzenia',

//
// Others
//

'Prune'					=>	'Czyszczenie',
'Server statistics'		=>  'Statystyki serwera',

//
// Update service
//

'Available'				=>	'Jest dostępna aktualizacja ModernBB v%s',
'Development'			=>	'Zainstalowana wersja %s, najnowsza, stabilna wersja to %s.',
'Download'				=>	'Pobierz v%s',
'Changelog'				=>	'Lista zmian',

//
// General actions and more
//

'Admin'					=>	'Administracja',
'Go back'				=>	'Wróć',
'Update'				=>	'Aktualizuj',
'Add'					=>	'Dodaj',
'Remove'				=>	'Usuń',
'Yes'					=>	'Tak',
'No'					=>	'Nie',
'here'					=>	'tutaj',
'Action'				=>	'Akcja',
'Maintenance mode'		=>	'tryb konserwacji', // Used for link text in more than one file

// Cookie bar
'Cookie bar'			=>	'Informacja o ciasteczkach',
'Cookie info'			=>	'Używamy ciasteczek, aby dać ci jak najlepsze wrażenia, przy korzystaniu z naszego forum.',
'More info'				=>	'Więcej informacji',
'Cookie set info'		=>	'Pokaż pasek z informacją o ciasteczkach na dole strony.',

//
// Admin loader
//

'No plugin message'		=>	'Nie ma wtyczki %s w folderze wtyczek.',
'Plugin failed message'	=>	'Ładowanie wtyczki <strong>%s</strong> zakończyło się niepowodzeniem.',

//
// Email templtes
//

// Email - activate_email.tpl
'activate_email.tpl'          =>
'Temat: Żądanie zmiany adresu e-mail

Witaj <username>,

Zażądałeś zmiany adresu e-mail, przypisanego do twojego konta na forum <base_url>. Jeśli to nie ty zażądałeś zmiany adresu e-mail, zignoruj tę wiadomość. Zmiana adresu e-mail będzie możliwa wyłącznie wtedy, gdy odwiedzisz stronę aktywacyjną z odnośnika podanego poniżej. Żeby aktywacja zadziałała, musisz być zalogowany na forum.

Żeby zmienić adres e-mail, odwiedź poniższą stronę:
<activation_url>

--
Automatyczna wiadomość wysłana z <board_mailer>
(Nie odpowiadaj na tę wiadomość)',

//
// Email - activate_password.tpl
//
'activate_password.tpl'          =>
'Temat: Żądanie zmiany hasła

Witaj <username>,

Zażądałeś zmiany hasła, przypisanego do twojego konta na forum <base_url>. Jeśli to nie ty zażądałeś zmiany hasła, zignoruj tę wiadomość. Zmiana hasła będzie możliwa wyłącznie wtedy, gdy odwiedzisz stronę aktywacyjną z odnośnika podanego poniżej.

Twoje nowe hasło to: <new_password>

Żeby zmienić hasło, odwiedź poniższą stronę:
<activation_url>

--
Automatyczna wiadomość wysłana z <board_mailer>
(Nie odpowiadaj na tę wiadomość)',

// Email - banned_email_change.tpl
'banned_email_change.tpl'          =>
'Temat: Uwaga - wykryto zablokowany adres e-mail

Użytkownik "<username>" do zmiany swojego adresu, użył zablokowanego adresu e-mail: <email>

Profil użytkownika: <profile_url>

--
Automatyczna wiadomość wysłana z <board_mailer>
(Nie odpowiadaj na tę wiadomość)',

// Email - banned_email_post.tpl
'banned_email_post.tpl'          =>
'Temat: Uwaga - wykryto zablokowany adres e-mail

Użytkownik "<username>" dodał posta z zablokowanego adresu e-mail: <email>

Adres posta: <post_url>

--
Automatyczna wiadomość wysłana z <board_mailer>
(Nie odpowiadaj na tę wiadomość)',

// Email - banned_email_register.tpl
'banned_email_register.tpl'          =>
'Temat: Uwaga - wykryto zablokowany adres e-mail

Użytkownik "<username>" zarejestrował się, używając zablokowanego adresu e-mail: <email>

Profil użytkownika: <profile_url>

--
Automatyczna wiadomość wysłana z <board_mailer>
(Nie odpowiadaj na tę wiadomość)',

// Email - dupe_email_change.tpl
'dupe_email_change.tpl'          =>
'Temat: Uwaga - wykryto zdublowany adres e-mail

Użytkownik "<username>" do zmiany swojego adresu, użył adresu e-mail, który należy także do: <dupe_list>

Profil użytkownika: <profile_url>

--
Automatyczna wiadomość wysłana z <board_mailer>
(Nie odpowiadaj na tę wiadomość)',

// Email - dupe_email_register.tpl
'dupe_email_register.tpl'          =>
'Temat: Uwaga - wykryto zdublowany adres e-mail

Użytkownik "<username>" zarejestrował się używając adresu e-mail, należącego także do: <dupe_list>

Profil użytkownika: <profile_url>

--
Automatyczna wiadomość wysłana z <board_mailer>
(Nie odpowiadaj na tę wiadomość)',

// Email - form_email.tpl
'form_email.tpl'          =>
'Temat: "<mail_subject>"

<sender> z <board_title> wysłał tobie wiadomość. Możesz wysłać odpowiedź do <sender>, odpowiadając na tę wiadomość.

Treść wiadomości:
-----------------------------------------------------------------------

<mail_message>

-----------------------------------------------------------------------

--
Automatyczna wiadomość wysłana z <board_mailer>',

// Email - new_reply.tpl
'new_reply.tpl'          =>
'Temat: Odpowiedź do wątku: "<topic_subject>"

<replier> odpowiedział w obserwowanym przez ciebie wątku "<topic_subject>". Może być więcej nowych odpowiedzi, jednakże nie będziesz o nich powiadamiany, do czasu aż nie odwiedzisz ponownie forum.

Post znajduje się pod adresem <post_url>

Aby przestać obserwować, odwiedź ten adres <unsubscribe_url>

--
Automatyczna wiadomość wysłana z <board_mailer>
(Nie odpowiadaj na tę wiadomość)',

// Email - new_reply_full.tpl
'new_reply_full.tpl'          =>
'Temat: Reply to topic: "<topic_subject>"

<replier> odpowiedział w obserwowanym przez ciebie wątku "<topic_subject>". Może być więcej nowych odpowiedzi, jednakże nie będziesz o nich powiadamiany, do czasu aż nie odwiedzisz ponownie forum.

Post znajduje się pod adresem <post_url>

Treść wiadomości:
-----------------------------------------------------------------------

<message>

-----------------------------------------------------------------------

Aby przestać obserwować, odwiedź ten adres <unsubscribe_url>

--
Automatyczna wiadomość wysłana z <board_mailer>
(Nie odpowiadaj na tę wiadomość)',

// Email - new_report.tpl
'new_report.tpl'          =>
'Temat: Report(<forum_id>) - "<topic_subject>"

Użytkownik "<username>" zgłosił następującą zawartość: <post_url>

Powód: <reason>

--
Automatyczna wiadomość wysłana z <board_mailer>
(Nie odpowiadaj na tę wiadomość)',

// Email - new_topic.tpl
'new_topic.tpl'          =>
'Temat: Nowy wątek w forum: "<forum_name>"

<poster> dodał nowy wątek "<topic_subject>" w obserwowanym przez ciebie forum "<forum_name>".

Wątek znajduje się pod adresem <topic_url>

Aby przestać obserwować, odwiedź ten adres <unsubscribe_url>

--
Automatyczna wiadomość wysłana z <board_mailer>
(Nie odpowiadaj na tę wiadomość)',

// Email - new_topic_full.tpl
'new_topic_full.tpl'          =>
'Temat: Nowy wątek w forum: "<forum_name>"

<poster> dodał nowy wątek "<topic_subject>" w obserwowanym przez ciebie forum "<forum_name>".

Wątek znajduje się pod adresem <topic_url>

Treść wiadomości:
-----------------------------------------------------------------------

<message>

-----------------------------------------------------------------------

Aby przestać obserwować, odwiedź ten adres <unsubscribe_url>

--
Automatyczna wiadomość wysłana z <board_mailer>
(Nie odpowiadaj na tę wiadomość)',

// Email - new_user.tpl
'new_user.tpl'          =>
'Temat: Uwaga - nowa rejestracja

Na forum <base_url> zarejestrował się nowy użytkownik "<username>".

Profil użytkownika: <profile_url>

w celu zarządzania kontem tego użytkownika, odwiedź poniższy adres:
<admin_url>

--
Automatyczna wiadomość wysłana z <board_mailer>
(Nie odpowiadaj na tę wiadomość)',

// Email - rename.tpl
'rename.tpl'          =>
'Temat: Zmiana nazwy użytkownika

Podczas aktualizacji forum pod adresem <base_url> stwierdzono że twoja nazwa użytkownika, jest zbyt podobna do nazwy istniejącego użytkownika. Twoja nazwa użytkownika, została odpowiednio zmieniona.

Stara nazwa: <old_username>
Nowa nazwa: <new_username>

Przepraszamy za spowodowane niedogodności.

--
Automatyczna wiadomość wysłana z <board_mailer>
(Nie odpowiadaj na tę wiadomość)',

// Email - welcome.tpl
'welcome.tpl'          =>
'Temat: Witamy na <board_title>!

Dziękujemy za rejestrację na <base_url>. Szczegóły konta:

Nazwa użytkownika: <username>
Hasło: <password>

Zaloguj się pod adresem <login_url> w celu aktywacji konta.

--
Automatyczna wiadomość wysłana z <board_mailer>
(Nie odpowiadaj na tę wiadomość)',

);
