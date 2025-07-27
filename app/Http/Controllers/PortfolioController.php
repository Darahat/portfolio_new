<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PortfolioController extends Controller
{
    public function show($id)
    {

        $portfolioItems = [
            [
                'id' => 'exampleModal-p1',
                'category' => 'Front End Development',
                'title' => 'Front End Development for RUBI',
                'description' => 'Rubi.com is a dynamic online platform that offers a range of services to its users. As a Freelancer, I contributed to the front-end development using cutting-edge technologies such as Vue.js 3 and Vuetify. This platform provided an excellent opportunity for collaboration with the client, resulting in a rewarding journey of mutual growth and success.',
                'imageThumb' => '/images/portfolio/port-img1.webp',
                'imageLarge' => '/images/portfolio/port-img1-large.webp',
                'projectType' => 'Front end development',
                'client' => 'Alex Vdal',
                'duration' => '2 Weeks',
                'task' => 'Frontend development using vue.js and vuetify.',
                'budget' => 'N/A',
                'liveUrl' => 'https://www.rubi.com/ca',
                'tags' => [
                    'Web Development',
                    'Front end Developer',
                    'Vue.js',
                    'Vuetify',
                    'Vite',
                    'Web page layout',
                    'Responsive design',
                    'Web page optimization',
                    'Mobile-friendly layout',
                    'User-friendly web design',
                ],
            ],
            [
                'id' => 'exampleModal-p2',
                'category' => 'Front End Development',
                'title' => 'Website Development for The Network Tap Company',
                'description' => 'TheNetworkTap.com is a vibrant online platform that serves as a hub for networking enthusiasts and professionals alike. As a member of the Rubi development team, I played a crucial role in shaping its front-end development...',
                'imageThumb' => '/images/portfolio/port-img2.webp',
                'imageLarge' => '/images/portfolio/port-img2-large.webp',
                'projectType' => 'Front-End Development',
                'client' => 'Wei de chang',
                'duration' => '1 Week',
                'task' => 'Front End Development for The Network Tap Company',
                'budget' => '$200',
                'liveUrl' => 'https://thenetworktap.com/',
                'tags' => [
                    'User-friendly web design',
                    'front-end development',
                    'HTML',
                    'CSS',
                    'Tailwind CSS',
                    'UI design',
                    'digital experience',
                ],
            ],
            [
                'id' => 'exampleModal-p3',
                'category' => 'E-Learning System',
                'title' => 'E-Learning system for ELP',
                'description' => 'The E-learning system developed for ELP is a streamlined platform built with Laravel and MySQL for backend functionality, and HTML, CSS, and Tailwind CSS for frontend design...',
                'imageThumb' => '/images/portfolio/port-img3.webp',
                'imageLarge' => '/images/portfolio/port-img3-large.webp',
                'projectType' => 'E-Learning Management System',
                'client' => 'Kobe Bryant',
                'duration' => '2 Weeks',
                'task' => 'Full Stack web Development Using Laravel',
                'budget' => '$400',
                'liveUrl' => '#contact',
                'tags' => [
                    'E-learning platform',
                    'Laravel development',
                    'MySQL database',
                    'HTML CSS Tailwind CSS',
                    'Online education system',
                    'Course management',
                    'Interactive learning materials',
                    'Student assessment',
                    'Discussion forums',
                    'Progress tracking',
                ],
            ],
            [
                'id' => 'exampleModal-p4',
                'category' => 'Flutter App Development',
                'title' => 'Flutter Mobile App for Bangladesh Agricultural University (BAU)',
                'description' => 'The Flutter mobile app developed for Bangladesh Agricultural University has become a cornerstone in agricultural education...',
                'imageThumb' => '/images/portfolio/port-img4.webp',
                'imageLarge' => '/images/portfolio/port-img4-large.webp',
                'projectType' => 'Flutter App Development',
                'client' => 'Bangladesh Agricultural University',
                'duration' => '2 Weeks',
                'task' => 'Make an app where university`s all contacts will be easily accessible using Flutter Development',
                'budget' => 'N/A',
                'liveUrl' => 'https://play.google.com/store/apps/details?id=com.bauictcell.bau_app&hl=en&gl=US',
                'tags' => [
                    'Flutter mobile app',
                    'Agricultural education app',
                    'Cross-platform development',
                    'Mobile application for agriculture',
                    'Educational technology',
                    'Agriculture research app',
                    'Agriculture outreach',
                    'Mobile learning platform',
                    'Agricultural resources app',
                ],
            ],
            [
                'id' => 'stakehive',
                'category' => 'DeFi App Development',
                'title' => 'DeFi App - StakeHive',
                'description' => 'StakeHive is a feature-rich Decentralized Finance (DeFi) application enabling users to stake tokens and earn rewards in a secure, transparent, and decentralized environment...',
                'imageThumb' => '/images/portfolio/port-img5.webp',
                'imageLarge' => '/images/portfolio/port-img5-large.webp',
                'projectType' => 'DeFi App Development',
                'client' => 'Private Blockchain Startup',
                'duration' => '4 Weeks',
                'task' => 'Smart contracts, staking logic, frontend integration using Nuxt.js & Web3.js',
                'budget' => 'Confidential',
                'liveUrl' => 'https://stakehive-defi-dapp.netlify.app',
                'tags' => [
                    'DeFi',
                    'Blockchain',
                    'Staking App',
                    'Smart Contract',
                    'Solidity',
                    'Nuxt 3',
                    'Web3.js',
                    'Token Rewards',
                    'Vue.js',
                ],
            ],
        ];

        $portfolioItem = collect($portfolioItems)->firstWhere('id', $id);

        if (!$portfolioItem) {
            abort(404);
        }

        return Inertia::render('Portfolio/Show', [
            'item' => $portfolioItem,
        ]);
    }
}
