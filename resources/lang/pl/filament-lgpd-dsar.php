<?php

return [
    'resource' => [
        'label' => 'Żądanie osoby, której dane dotyczą',
        'plural_label' => 'Żądania osób, których dane dotyczą',
    ],

    'fields' => [
        'type' => 'Prawo',
        'status' => 'Status',
        'requester_name' => 'Wnioskodawca',
        'requester_email' => 'E-mail wnioskodawcy',
        'details' => 'Szczegóły',
        'response' => 'Odpowiedź',
        'reason' => 'Powód',
        'subject' => 'Osoba, której dane dotyczą',
        'subject_type' => 'Model osoby',
        'subject_id' => 'ID osoby',
        'verified' => 'Zweryfikowano',
        'due_at' => 'Termin',
        'verified_at' => 'Zweryfikowano dnia',
        'completed_at' => 'Zamknięto',
        'created_at' => 'Otrzymano',
    ],

    'type' => [
        'confirmation' => 'Potwierdzenie przetwarzania',
        'access' => 'Dostęp',
        'correction' => 'Sprostowanie',
        'anonymization' => 'Anonimizacja lub blokada',
        'portability' => 'Przenoszalność',
        'deletion' => 'Usunięcie',
        'sharing_information' => 'Informacja o udostępnianiu',
        'consent_information' => 'Informacja o zgodzie',
        'consent_revocation' => 'Wycofanie zgody',
    ],

    'status' => [
        'pending' => 'Oczekujące',
        'completed' => 'Zrealizowane',
        'rejected' => 'Odrzucone',
    ],

    'filters' => [
        'overdue' => 'Po terminie',
    ],

    'actions' => [
        'verify' => [
            'label' => 'Zweryfikuj tożsamość',
            'description' => 'Potwierdź, kim jest wnioskodawca, i powiąż żądanie z jego rekordem. Wcześniej nic nie jest eksportowane ani usuwane.',
            'not_found' => 'Nie znaleziono rekordu tej osoby.',
            'success' => 'Tożsamość zweryfikowana.',
        ],
        'fulfil' => [
            'label' => 'Zrealizuj',
            'description' => [
                'access' => 'Eksportuje wszystkie zadeklarowane dane osobowe osoby do pliku JSON.',
                'portability' => 'Eksportuje wszystkie zadeklarowane dane osobowe osoby do pliku JSON.',
                'anonymization' => 'Anonimizuje wszystkie rekordy osoby. Tej operacji nie można cofnąć.',
                'deletion' => 'Anonimizuje wszystkie rekordy osoby. Tej operacji nie można cofnąć.',
            ],
            'success' => 'Żądanie zrealizowane.',
        ],
        'complete' => [
            'label' => 'Zakończ',
            'description' => 'Na to prawo odpowiada się ręcznie: zapisz odpowiedź udzieloną osobie.',
            'success' => 'Żądanie zakończone.',
        ],
        'reject' => [
            'label' => 'Odrzuć',
            'success' => 'Żądanie odrzucone.',
        ],
        'download' => [
            'label' => 'Pobierz eksport',
        ],
    ],
];
