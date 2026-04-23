<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $projects = [
            [
                'title' => 'NeoPortfolio',
                'description' => 'Portfolio interactif avec animations 3D et glassmorphism. Thème dark/gold.',
                'image_url' => 'images/neoportfolio.jpg',
                'icon' => 'fa-bookmark',
                'technologies' => 'HTML, CSS, JS, GSAP',
                'stars' => 24,
                'link' => '#',
            ],
            [
                'title' => 'DBModeler X',
                'description' => 'Outil de modélisation de bases de données MySQL avec générateur de schémas.',
                'image_url' => 'images/dbmodeler.jpg',
                'icon' => 'fa-database',
                'technologies' => 'Python, SQL, Flask',
                'stars' => 67,
                'link' => '#',
            ],
            [
                'title' => 'StreamCore',
                'description' => 'Plateforme de gestion de production live : overlay, sondes, monitoring.',
                'image_url' => 'images/streamcore.jpg',
                'icon' => 'fa-vr-cardboard',
                'technologies' => 'Node.js, WebSocket, OBS',
                'stars' => 13,
                'link' => '#',
            ],
            [
                'title' => 'IA MusicLab',
                'description' => 'Expérimentation d\'IA générative pour sound design live et visuels réactifs.',
                'image_url' => 'images/iamusiclab.jpg',
                'icon' => 'fa-brain',
                'technologies' => 'Python, TensorFlow, MIDI',
                'stars' => 42,
                'link' => '#',
            ],
            [
                'title' => 'XV CLI',
                'description' => 'Interface en ligne de commande pour automatiser le déploiement de projets web.',
                'image_url' => 'images/xvcli.jpg',
                'icon' => 'fa-cubes',
                'technologies' => 'Go, Docker, Make',
                'stars' => 9,
                'link' => '#',
            ],
            [
                'title' => 'CyberDash',
                'description' => 'Dashboard de monitoring pour serveurs et bases de données en temps réel.',
                'image_url' => 'images/cyberdash.jpg',
                'icon' => 'fa-shield-alt',
                'technologies' => 'Vue.js, D3, SQL',
                'stars' => 31,
                'link' => '#',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}