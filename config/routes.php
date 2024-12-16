<?php
return [
    '/' => ['AccueilController', 'index'],
    '/sanctions' => ['SanctionsController', 'index'],
    '/inscription' => ['SanctionsController', 'inscription'],
    '/connexion' => ['SanctionsController', 'connexion'],
    '/legal' => ['AccueilController', 'legal'],
    '/deconnexion' => ['SanctionsController', 'deconnexion'],
    '/createPromotion' => ['PromotionController', 'createPromotion'],
];