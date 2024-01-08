<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration {
    public function up(): void
    {
        // Home Page
        $this->migrator->add('general.sliders', [
            [
                "url" => "book-slot",
                "image" => 6
            ],
            [
                "url" => "book-slot",
                "image" => 3
            ]
        ]);
        $this->migrator->add('general.card2Title', 'NACL - Where Sports Dreams Take Flight!');
        $this->migrator->add('general.card2Message', "Get ready to experience the thrill of victory! Book your sports slot at NACL and make every moment a championship moment. Don't miss out – reserve your spot now!");
        $this->migrator->add('general.card2ButtonLabel', 'Book Slot');
        $this->migrator->add('general.card2ButtonURL', 'book-slot');
        $this->migrator->add('general.card2YoutubeId', 'UYFAYonq46I');

        $this->migrator->add('general.welcomeTitle', 'Greetings, Athletes! NACL Opens Its Doors to Your Sporting Journey!');
        $this->migrator->add('general.welcomeMessage', "Welcome to NACL, the heartbeat of sports excitement! Whether you're a seasoned athlete or just starting, our doors are wide open for you. Join us in the pursuit of victory and let the games begin!");
        $this->migrator->add('general.welcomeImage', 4);

        $this->migrator->add('general.videoRecordingTitle', 'Lights, Camera, Action: NACL Premium Video Recording!');
        $this->migrator->add('general.videoRecordingMessage', "Upgrade Your Game with NACL's Premium Video Recording! For a small fee, unlock the power to capture and relive your best moments on the field. Opt for our exclusive recording feature and turn every play into a highlight reel. Your sports journey deserves the spotlight – start recording today!");
        $this->migrator->add('general.videoRecordingImage', 5);
        $this->migrator->add('general.videoRecordingPoints', [
            [
                "title" => 'High-Quality Playback',
                "message" => "Enjoy your recorded moments in stunning detail with our high-definition video playback. Relive every goal, dunk, or ace with clarity and precision.",
                "image" => 6,
            ],
            [
                "title" => 'Easy Sharing Options',
                "message" => "With NACL's paid video recording, sharing your triumphs is just a click away. Easily share your recorded highlights with friends, teammates, and fans on social media or keep them private for personal enjoyment.",
                "image" => 7,
            ],
        ]);

        $this->migrator->add('general.shopSectionTitle', "Gear Up for Greatness: NACL's Sports Pro Shop!");
        $this->migrator->add('general.shopSectionMessage', "Step into NACL's Sports Pro Shop and gear up for success! Explore a curated selection of top-quality sports equipment, apparel, and accessories. Whether you're a player or a fan, find your winning look here!");
        // Lane Page
        $this->migrator->add('general.laneBreadcrumbImage', 1);
        $this->migrator->add('general.enableFeatureSection', true);
        $this->migrator->add('general.enableFAQSection', true);
        $this->migrator->add('general.enableLaneCTASection', true);
        $this->migrator->add('general.laneFeatures', [
            [
                "title" => 'Versatile Court Configurations',
                "image" => 3,
                "message" => 'Switch sports seamlessly with individual lanes that combine for expansive courts at NACL.',
            ],
            [
                "title" => 'Customizable Gameplay Zones',
                "image" => 5,
                "message" => "Create tailored spaces for intense matches or collaborative training by combining NACL's modular sports lanes.",
            ],
            [
                "title" => 'Boundless Sporting Possibilities',
                "image" => 9,
                "message" => 'Unlock boundless possibilities at NACL with sports lanes that serve as building blocks for a world of diverse play.',
            ]
        ]);
        // Sports Page
        $this->migrator->add('general.sportBreadcrumbImage', 1);
        $this->migrator->add('general.enableSportCTASection', true);
        // Shop Page
        $this->migrator->add('general.shopBreadcrumbImage', 3);
        $this->migrator->add('general.enableShopAppSection', false);
        $this->migrator->add('general.shopAppTitle', 'Unlock Your Sports Journey: Install the NACL App Today!');
        $this->migrator->add('general.shopAppMessage', 'Take your sports experience to the next level! Download the NACL app now to access exclusive features, real-time updates, and a seamless platform for booking, recording, and staying connected with your sports community. Your game, your rules – install the app and elevate your play!');
        $this->migrator->add('general.shopAppAppStoreURL', '#!');
        $this->migrator->add('general.shopAppGoogleStoreURL', '#!');
        $this->migrator->add('general.enableShopCTASection', true);
        // Training Video Page
        $this->migrator->add('general.trainingBreadcrumbImage', 2);
        $this->migrator->add('general.trainingFlow', [
            [
                "title" => "Effortless Video Tailoring",
                "message" => "Craft personalized sports stories effortlessly with NACL's intuitive video tailoring feature.",
            ],
            [
                "title" => "Precision Editing",
                "message" => "Fine-tune your play with NACL's powerful editing tools, creating cinematic highlights with ease.",
            ],
            [
                "title" => "Instant Sharing",
                "message" => "Share your victories instantly – NACL's one-click sharing makes showcasing your skills a breeze!",
            ]
        ]);
        $this->migrator->add('general.descriptionSectionTitle', 'Capture Your Sporting Greatness');
        $this->migrator->add('general.descriptionSectionMessage', "Step into a world where every play becomes a lasting memory. NACL's video recording feature empowers you to immortalize your sports journey with precision and style. Elevate your sports experience with the ability to relive and share your triumphs at the click of a button.
        Embrace high-definition playback for exceptional clarity, providing a playback experience that truly reflects the intensity of the game.
        Access and share your recorded highlights effortlessly. Make every victory unforgettable with NACL's cutting-edge video recording feature.
        ");
        $this->migrator->add('general.descriptionSectionPoints', [
            ["point" => "Record every detail with precision."],
            ["point" => "Experience the thrill instantly with real-time playback."],
            ["point" => "Share your triumphs seamlessly on social media or with your sports community."]
        ]);
        $this->migrator->add('general.descriptionSectionImage', 7);
        $this->migrator->add('general.trainingVideoTitle', 'Game On: Captured Moments');
        $this->migrator->add('general.trainingVideoMessage', "Explore the essence of your sports journey with NACL's Video Showcase. Preview the excitement in stunning shot images – relive the intensity, celebrate victories, and get ready for more thrilling moments on our platform.");
        $this->migrator->add('general.trainingVideoImages', [1, 4, 6, 7, 9]);
        $this->migrator->add('general.testimonialTitle', 'Voices of Victory');
        $this->migrator->add('general.testimonialMessage', "Discover the impact of NACL through the voices of our community. In our Testimonials section, players and enthusiasts share their journey, victories, and the unparalleled sports experience they found on our platform. Join the chorus of success stories and let their voices inspire your own triumphs at NACL.");
        $this->migrator->add('general.enableTrainingVideoCTASection', true);
        // About Us Page
        $this->migrator->add('general.aboutUsBreadcrumbImage', 4);
        $this->migrator->add('general.aboutUsImage', 2);
        $this->migrator->add('general.aboutUsTitle', 'Our Sporting Saga');
        $this->migrator->add('general.aboutUsMessage', "Welcome to NACL, where the passion for sports meets the power of community. Our journey is fueled by a commitment to providing a dynamic platform that unites athletes, fans, and enthusiasts. Explore our story, mission, and the vibrant community that defines NACL. Join us as we celebrate the spirit of competition, camaraderie, and the joy that sports bring to every player, on and off the field.");
        $this->migrator->add('general.aboutUsButtonLabel', 'Contact Us');
        $this->migrator->add('general.aboutUsButtonURL', 'contact-us');
        $this->migrator->add('general.enableAboutUsSponsorSection', false);
        $this->migrator->add('general.aboutUsKeyFeatureTitle', "Unlocking Excellence: NACL's Key Features");
        $this->migrator->add('general.aboutUsKeyFeatureMessage', "Discover the core elements that make NACL a game-changer in the world of sports. From cutting-edge technology to community-driven initiatives, our key features are designed to elevate your sports experience. Explore the essence of what sets NACL apart and empowers you to play, connect, and succeed like never before.");
        $this->migrator->add('general.aboutUsKeyFeaturePoints', [
            [
                "title" => 'Real-Time Booking',
                "image" => 3,
            ],
            [
                "title" => 'MegaPlay Fusion',
                "image" => 5,
            ],
            [
                "title" => 'Precision Video Recording',
                "image" => 10,
            ],
            [
                "title" => 'Sports Pro Shop',
                "image" => 11,
            ],
            [
                "title" => 'Customizable Gameplay Zones',
                "image" => 12,
            ],
            [
                "title" => 'Interconnected Sports Haven',
                "image" => 14,
            ],
        ]);
        $this->migrator->add('general.aboutUsVideoImage', 14);
        $this->migrator->add('general.aboutUsVideoURL', 'sHXcWvZr-9c');
        $this->migrator->add('general.aboutUsTeamSectionTitle', 'United in Victory: Meet the NACL Teams');
        $this->migrator->add('general.aboutUsTeamSectionMessage', "Discover the heart of NACL through our diverse and dedicated teams. Each member brings passion and skill, contributing to the vibrant community that defines our sports platform. Explore the stories that bind us together in the pursuit of victory.");
        $this->migrator->add('general.enableAboutUsTeamTestimonialSection', false);
        $this->migrator->add('general.enableAboutUsCTASection', true);
        // Contact Us Page
        $this->migrator->add('general.contactUsBreadcrumbImage', 12);
        $this->migrator->add('general.contactUsPhoneMessage', 'Our team is ready to help you with any questions you may have about NACL.');
        $this->migrator->add('general.contactUsPhoneNo', '+1-XXX-XXX-XXXX');
        $this->migrator->add('general.contactUsEmailMessage', 'Send us an email for detailed queries, feedback, or partnership opportunities.');
        $this->migrator->add('general.contactUsEmail', 'support@nacl.com');
        $this->migrator->add('general.contactUsLocationMessage', '123 Sports Avenue, Cityville, ST 12345, USA');
        $this->migrator->add('general.contactUsMapLink', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin');
        $this->migrator->add('general.enableMapSection', true);
        // Common
        $this->migrator->add('general.lightLogo', 1);
        $this->migrator->add('general.darkLogo', 1);
        $this->migrator->add('general.favicon', 2);
        $this->migrator->add('general.companyShortDescription', 'NACL: Where passion for sports meets the power of community, celebrating the spirit of competition and camaraderie on and off the field.');
        $this->migrator->add('general.facebook', 'https://fb.com');
        $this->migrator->add('general.instagram', 'https://instagram.com');
        $this->migrator->add('general.linkedIn', 'https://linkedin.com');
        $this->migrator->add('general.twitter', 'https://twitter.com');
        $this->migrator->add('general.youtube', 'https://youtube.com');
        $this->migrator->add('general.googleMaps', 'https://maps.google.com');
        $this->migrator->add('general.CTATopTitle', 'Have Question ? Get in touch!');
        $this->migrator->add('general.CTAMessage', "Have questions or need assistance? Contact us, and our team will be delighted to help you navigate your NACL experience.");
        $this->migrator->add('general.CTAButtonLabel', 'Contact Us');
        $this->migrator->add('general.CTAButtonURL', 'contact-us');
        $this->migrator->add('general.whatsAppPhoneNumber', '+12409375963');
        $this->migrator->add('general.whatsAppMessage', "🏆 Welcome to NACL - Your Sports Community! 🏆

        At NACL, we're more than just a sports platform; we're a vibrant community where passion for sports meets the power of togetherness. 🌐 Dive into our journey, fueled by a commitment to uniting athletes, fans, and enthusiasts like you.

        🌟 Explore our Story:
        Discover the heartbeat of NACL - our story, mission, and the vibrant community that defines us. Learn how we're dedicated to creating a dynamic platform that celebrates the spirit of competition and camaraderie.

        🤝 Join the Celebration:
        Be a part of something extraordinary! Join us in celebrating the joy that sports bring to every player, both on and off the field. Whether you're an athlete, a fan, or just passionate about sports, NACL is the place where your love for the game comes to life.

        🚀 Let's make sports history together at NACL! 🚀

        [Include contact information or any specific call-to-action if necessary]

        #NACL #SportsCommunity #PassionUnitesUs");
        $this->migrator->add('general.enableSponsorSection', false);
        $this->migrator->add('general.sponsorImages', [1, 4, 6, 7, 9]);
    }
};
