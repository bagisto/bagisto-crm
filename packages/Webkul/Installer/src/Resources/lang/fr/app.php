<?php

return [
    'seeders' => [
        'attributes' => [
            'leads' => [
                'description'         => 'Description',
                'expected-close-date' => 'Date de clôture prévue',
                'lead-value'          => 'Valeur du lead',
                'sales-owner'         => 'Responsable commercial',
                'source'              => 'Source',
                'title'               => 'Titre',
                'type'                => 'Type',
                'pipeline'            => 'Pipeline',
                'stage'               => 'Étape',
                
            ],

            'persons' => [
                'contact-numbers' => 'Numéros de contact',
                'emails'          => 'E-mails',
                'job-title'       => 'Intitulé du poste',
                'name'            => 'Nom',
                'organization'    => 'Organisation',
                'sales-owner'     => 'Responsable commercial',
                
            ],

            'organizations' => [
                'address'     => 'Adresse',
                'name'        => 'Nom',
                'sales-owner' => 'Responsable commercial',
                
            ],

            'products' => [
                'description' => 'Description',
                'name'        => 'Nom',
                'price'       => 'Prix',
                'quantity'    => 'Quantité',
                'sku'         => 'SKU',
                
            ],

            'quotes' => [
                'adjustment-amount' => 'Montant de l\'ajustement',
                'billing-address'   => 'Adresse de facturation',
                'description'       => 'Description',
                'discount-amount'   => 'Montant de la réduction',
                'discount-percent'  => 'Pourcentage de réduction',
                'expired-at'        => 'Expire le',
                'grand-total'       => 'Total général',
                'person'            => 'Personne',
                'sales-owner'       => 'Responsable des ventes',
                'shipping-address'  => 'Adresse de livraison',
                'sub-total'         => 'Sous-total',
                'subject'           => 'Sujet',
                'tax-amount'        => 'Montant de la taxe',
                
            ],

            'warehouses' => [
                'contact-address' => 'Adresse de contact',
                'contact-emails'  => 'Emails de contact',
                'contact-name'    => 'Nom du contact',
                'contact-numbers' => 'Numéros de contact',
                'description'     => 'Description',
                'name'            => 'Nom',
                
            ],
        ],

        'email' => [
            'activity-created'      => 'Activité créée',
            'activity-modified'     => 'Activité modifiée',
            'date'                  => 'Date',
            'new-activity'          => 'Vous avez une nouvelle activité, veuillez trouver les détails ci-dessous',
            'new-activity-modified' => 'Une activité a été modifiée, veuillez trouver les détails ci-dessous',
            'participants'          => 'Participants',
            'title'                 => 'Titre',
            'type'                  => 'Type',
            
        ],

        'lead' => [
            'pipeline' => [
                'default' => 'Pipeline par défaut',

                'pipeline-stages' => [
                    'follow-up'   => 'Suivi',
                    'lost'        => 'Perdu',
                    'negotiation' => 'Négociation',
                    'new'         => 'Nouveau',
                    'prospect'    => 'Prospect',
                    'won'         => 'Gagné',
                    
                ],
            ],

            'source' => [
                'direct'   => 'Direct',
                'email'    => 'Email',
                'phone'    => 'Téléphone',
                'web'      => 'Web',
                'web-form' => 'Formulaire Web',
                
            ],

            'type' => [
                'existing-business' => 'Entreprise existante',
                'new-business'      => 'Nouvelle entreprise',
            ],
        ],

        'user' => [
            'role' => [
                'administrator-role' => 'Rôle d\'administrateur',
                'administrator'      => 'Administrateur',
                
            ],
        ],

        'workflow' => [
            'email-to-participants-after-activity-updation' => 'E-mails aux participants après la mise à jour de l\'activité',
            'email-to-participants-after-activity-creation' => 'E-mails aux participants après la création de l\'activité',
        ],
    ],

    'installer' => [
        'index' => [
            'create-administrator' => [
                'admin'            => 'Administrateur',
                'krayin'           => 'Krayin',
                'confirm-password' => 'Confirmer le mot de passe',
                'email'            => 'E-mail',
                'email-address'    => 'admin@example.com',
                'password'         => 'Mot de passe',
                'title'            => 'Créer un administrateur',
            ],

            'environment-configuration' => [
                'algerian-dinar'              => 'Dinar Algérien (DZD)',
                'allowed-currencies'          => 'Monnaies Autorisées',
                'allowed-locales'             => 'Locales Autorisées',
                'application-name'            => 'Nom de l\'Application',
                'argentine-peso'              => 'Peso Argentin (ARS)',
                'australian-dollar'           => 'Dollar Australien (AUD)',
                'krayin'                      => 'Krayin',
                'bangladeshi-taka'            => 'Taka Bangladais (BDT)',
                'brazilian-real'              => 'Real Brésilien (BRL)',
                'british-pound-sterling'      => 'Livre Sterling Britannique (GBP)',
                'canadian-dollar'             => 'Dollar Canadien (CAD)',
                'cfa-franc-bceao'             => 'Franc CFA BCEAO (XOF)',
                'cfa-franc-beac'              => 'Franc CFA BEAC (XAF)',
                'chilean-peso'                => 'Peso Chilien (CLP)',
                'chinese-yuan'                => 'Yuan Chinois (CNY)',
                'colombian-peso'              => 'Peso Colombien (COP)',
                'czech-koruna'                => 'Couronne Tchèque (CZK)',
                'danish-krone'                => 'Couronne Danoise (DKK)',
                'database-connection'         => 'Connexion à la Base de Données',
                'database-hostname'           => 'Hôte de la Base de Données',
                'database-name'               => 'Nom de la Base de Données',
                'database-password'           => 'Mot de Passe de la Base de Données',
                'database-port'               => 'Port de la Base de Données',
                'database-prefix'             => 'Préfixe de la Base de Données',
                'database-username'           => 'Nom d\'Utilisateur de la Base de Données',
                'default-currency'            => 'Monnaie par Défaut',
                'default-locale'              => 'Locale par Défaut',
                'default-timezone'            => 'Fuseau Horaire par Défaut',
                'default-url'                 => 'URL par Défaut',
                'default-url-link'            => 'https://localhost',
                'egyptian-pound'              => 'Livre Égyptienne (EGP)',
                'euro'                        => 'Euro (EUR)',
                'fijian-dollar'               => 'Dollar Fidjien (FJD)',
                'hong-kong-dollar'            => 'Dollar Hongkongais (HKD)',
                'hungarian-forint'            => 'Forint Hongrois (HUF)',
                'indian-rupee'                => 'Roupie Indienne (INR)',
                'indonesian-rupiah'           => 'Rupiah Indonésien (IDR)',
                'israeli-new-shekel'          => 'Nouveau Shekel Israélien (ILS)',
                'japanese-yen'                => 'Yen Japonais (JPY)',
                'jordanian-dinar'             => 'Dinar Jordanien (JOD)',
                'kazakhstani-tenge'           => 'Tenge Kazakhstanais (KZT)',
                'kuwaiti-dinar'               => 'Dinar Koweïtien (KWD)',
                'lebanese-pound'              => 'Livre Libanaise (LBP)',
                'libyan-dinar'                => 'Dinar Libyen (LYD)',
                'malaysian-ringgit'           => 'Ringgit Malaisien (MYR)',
                'mauritian-rupee'             => 'Roupie Mauricienne (MUR)',
                'mexican-peso'                => 'Peso Mexicain (MXN)',
                'moroccan-dirham'             => 'Dirham Marocain (MAD)',
                'mysql'                       => 'Mysql',
                'nepalese-rupee'              => 'Roupie Népalaise (NPR)',
                'new-taiwan-dollar'           => 'Nouveau Dollar Taïwanais (TWD)',
                'new-zealand-dollar'          => 'Dollar Néo-Zélandais (NZD)',
                'nigerian-naira'              => 'Naira Nigérian (NGN)',
                'norwegian-krone'             => 'Couronne Norvégienne (NOK)',
                'omani-rial'                  => 'Rial Omanais (OMR)',
                'pakistani-rupee'             => 'Roupie Pakistanaise (PKR)',
                'panamanian-balboa'           => 'Balboa Panaméen (PAB)',
                'paraguayan-guarani'          => 'Guarani Paraguayen (PYG)',
                'peruvian-nuevo-sol'          => 'Nouveau Sol Péruvien (PEN)',
                'pgsql'                       => 'pgSQL',
                'philippine-peso'             => 'Peso Philippin (PHP)',
                'polish-zloty'                => 'Zloty Polonais (PLN)',
                'qatari-rial'                 => 'Rial Qatari (QAR)',
                'romanian-leu'                => 'Leu Roumain (RON)',
                'russian-ruble'               => 'Rouble Russe (RUB)',
                'saudi-riyal'                 => 'Riyal Saoudien (SAR)',
                'select-timezone'             => 'Sélectionner le Fuseau Horaire',
                'singapore-dollar'            => 'Dollar Singapourien (SGD)',
                'south-african-rand'          => 'Rand Sud-Africain (ZAR)',
                'south-korean-won'            => 'Won Sud-Coréen (KRW)',
                'sqlsrv'                      => 'SQLSRV',
                'sri-lankan-rupee'            => 'Roupie Sri-lankaise (LKR)',
                'swedish-krona'               => 'Couronne Suédoise (SEK)',
                'swiss-franc'                 => 'Franc Suisse (CHF)',
                'thai-baht'                   => 'Baht Thaïlandais (THB)',
                'title'                       => 'Configuration de la Boutique',
                'tunisian-dinar'              => 'Dinar Tunisien (TND)',
                'turkish-lira'                => 'Lira Turque (TRY)',
                'ukrainian-hryvnia'           => 'Hryvnia Ukrainienne (UAH)',
                'united-arab-emirates-dirham' => 'Dirham des Émirats Arabes Unis (AED)',
                'united-states-dollar'        => 'Dollar des États-Unis (USD)',
                'uzbekistani-som'             => 'Som Ouzbek (UZS)',
                'venezuelan-bolívar'          => 'Bolívar Vénézuélien (VEF)',
                'vietnamese-dong'             => 'Dong Vietnamien (VND)',
                'warning-message'             => 'Attention ! Les paramètres pour la langue système par défaut et la monnaie par défaut sont permanents et ne peuvent pas être modifiés une fois définis.',
                'zambian-kwacha'              => 'Kwacha Zambien (ZMW)',
                
            ],

            'installation-processing' => [
                'krayin'       => 'Installation Krayin',
                'krayin-info'  => 'Création des tables de la base de données, cela peut prendre quelques instants',
                'title'        => 'Installation',
                
            ],

            'installation-completed' => [
                'admin-panel'                => 'Panneau d\'administration',
                'krayin-forums'              => 'Forum Krayin',
                'customer-panel'             => 'Panneau client',
                'explore-krayin-extensions'  => 'Explorer les extensions Krayin',
                'title'                      => 'Installation terminée',
                'title-info'                 => 'Krayin a été installé avec succès sur votre système.',
                
            ],

            'ready-for-installation' => [
                'create-databsae-table'   => 'Créer la table de la base de données',
                'create-database-table'   => 'Créer la table de la base de données',
                'install'                 => 'Installation',
                'install-info'            => 'Krayin pour l\'installation',
                'install-info-button'     => 'Cliquez sur le bouton ci-dessous pour',
                'populate-database-table' => 'Peupler les tables de la base de données',
                'start-installation'      => 'Commencer l\'installation',
                'title'                   => 'Prêt pour l\'installation',
            ],

            'start' => [
                'locale'        => 'Paramètre régional',
                'main'          => 'Commencer',
                'select-locale' => 'Sélectionner le paramètre régional',
                'title'         => 'Votre installation Krayin',
                'welcome-title' => 'Bienvenue sur Krayin',
            ],

            'server-requirements' => [
                'calendar'    => 'Calendar',
                'ctype'       => 'cType',
                'curl'        => 'cURL',
                'dom'         => 'dom',
                'fileinfo'    => 'fileInfo',
                'filter'      => 'Filter',
                'gd'          => 'GD',
                'hash'        => 'Hash',
                'intl'        => 'intl',
                'json'        => 'JSON',
                'mbstring'    => 'mbstring',
                'openssl'     => 'openssl',
                'pcre'        => 'pcre',
                'pdo'         => 'pdo',
                'php'         => 'PHP',
                'php-version' => '8.1 or higher',
                'session'     => 'session',
                'title'       => 'System Requirements',
                'tokenizer'   => 'tokenizer',
                'xml'         => 'XML',
            ],

            'back'                     => 'Retour',
            'krayin'                   => 'Krayin',
            'krayin-info'              => 'un projet communautaire de',
            'krayin-logo'              => 'Logo Krayin',
            'continue'                 => 'Continuer',
            'installation-description' => 'L\'installation de Krayin implique généralement plusieurs étapes. Voici un aperçu général du processus d\'installation de Krayin',
            'installation-info'        => 'Nous sommes ravis de vous voir ici !',
            'installation-title'       => 'Bienvenue dans l\'installation',
            'title'                    => 'Installateur Krayin',
            
            'webkul'                   => 'Webkul',
        ],
    ],
];
