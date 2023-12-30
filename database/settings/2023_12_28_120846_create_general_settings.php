<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.card2Title', '');
        $this->migrator->add('general.card2Message', '');
        $this->migrator->add('general.card2ButtonLabel', '');
        $this->migrator->add('general.card2ButtonURL', '');
        $this->migrator->add('general.card2YoutubeURL', '');

        $this->migrator->add('general.welcomeTitle', '');
        $this->migrator->add('general.welcomeMessage', '');
        $this->migrator->add('general.welcomeImage', null);

        $this->migrator->add('general.sportSectionTitle', '');
        $this->migrator->add('general.sportSectionMessage', '');
        $this->migrator->add('general.sportSectionImage', null);
        // Repeating Data
        $this->migrator->add('general.sportSectionTitle1', '');
        $this->migrator->add('general.sportSectionMessage1', '');
        $this->migrator->add('general.sportSectionImage1', null);
        $this->migrator->add('general.sportSectionTitle2', '');
        $this->migrator->add('general.sportSectionMessage2', '');
        $this->migrator->add('general.sportSectionImage2', null);

        $this->migrator->add('general.shopSectionTitle', '');
        $this->migrator->add('general.shopSectionMessage', '');

        // Lane Page
        $this->migrator->add('general.laneBreadcrumbImage', null);
        $this->migrator->add('general.enableFeatureSection', true);
        $this->migrator->add('general.enableFAQSection', true);
        $this->migrator->add('general.enableLaneCTASection', true);
        // Sports Page
        $this->migrator->add('general.sportBreadcrumbImage', null);
        $this->migrator->add('general.enableSportCTASection', true);
        // Shop Page
        $this->migrator->add('general.shopBreadcrumbImage', null);
        $this->migrator->add('general.enableShopAppSection', true);
        $this->migrator->add('general.shopAppTitle', '');
        $this->migrator->add('general.shopAppMessage', '');
        $this->migrator->add('general.shopAppAppStoreURL', '');
        $this->migrator->add('general.shopAppGoogleStoreURL', '');
        $this->migrator->add('general.enableShopCTASection', true);
        // Training Video Page
        $this->migrator->add('general.trainingBreadcrumbImage', null);
        $this->migrator->add('general.flowTitle1', '');
        $this->migrator->add('general.flowMessage1', '');
        $this->migrator->add('general.flowTitle2', '');
        $this->migrator->add('general.flowMessage2', '');
        $this->migrator->add('general.flowTitle3', '');
        $this->migrator->add('general.flowMessage3', '');
        $this->migrator->add('general.descriptionSectionTitle', '');
        $this->migrator->add('general.descriptionSectionMessage', '');
        $this->migrator->add('general.descriptionSectionPoints', '');
        $this->migrator->add('general.descriptionSectionImage', null);
        $this->migrator->add('general.trainingVideoTitle', '');
        $this->migrator->add('general.trainingVideoMessage', '');
        $this->migrator->add('general.trainingVideoImages', null);
        $this->migrator->add('general.testimonialTitle', '');
        $this->migrator->add('general.testimonialMessage', '');
        $this->migrator->add('general.enableTrainingVideoCTASection', true);
        // About Us Page
        $this->migrator->add('general.aboutUsBreadcrumbImage', null);
        $this->migrator->add('general.aboutUsImage', null);
        $this->migrator->add('general.aboutUsTitle', '');
        $this->migrator->add('general.aboutUsMessage', '');
        $this->migrator->add('general.aboutUsButtonLabel', '');
        $this->migrator->add('general.aboutUsButtonURL', '');
        $this->migrator->add('general.enableAboutUsSponsorSection', true);
        $this->migrator->add('general.aboutUsKeyFeatureTitle', '');
        $this->migrator->add('general.aboutUsKeyFeatureMessage', '');
        $this->migrator->add('general.aboutUsKeyFeaturePoints', '');
        $this->migrator->add('general.aboutUsVideoImage', null);
        $this->migrator->add('general.aboutUsVideoURL', '');
        $this->migrator->add('general.aboutUsTeamSectionTitle', '');
        $this->migrator->add('general.aboutUsTeamSectionMessage', '');
        $this->migrator->add('general.enableAboutUsTeamTestimonialSection', true);
        $this->migrator->add('general.enableAboutUsCTASection', true);
        // Contact Us Page
        $this->migrator->add('general.contactUsBreadcrumbImage', null);
        $this->migrator->add('general.contactUsPhoneMessage', '');
        $this->migrator->add('general.contactUsPhoneNo', '');
        $this->migrator->add('general.contactUsEmailMessage', '');
        $this->migrator->add('general.contactUsEmail', '');
        $this->migrator->add('general.contactUsLocationMessage', '');
        $this->migrator->add('general.contactUsMapLink', '');
        $this->migrator->add('general.enableMapSection', true);
        // Common
        $this->migrator->add('general.lightLogo', '');
        $this->migrator->add('general.darkLogo', '');
        $this->migrator->add('general.favicon', '');
        $this->migrator->add('general.facebook', '');
        $this->migrator->add('general.instagram', '');
        $this->migrator->add('general.linkedIn', '');
        $this->migrator->add('general.twitter', '');
        $this->migrator->add('general.youtube', '');
        $this->migrator->add('general.googleMaps', '');
        $this->migrator->add('general.CTATopTitle', '');
        $this->migrator->add('general.CTAHeading', '');
        $this->migrator->add('general.CTAMessage', '');
        $this->migrator->add('general.CTAButtonLabel', '');
        $this->migrator->add('general.CTAButtonURL', '');
    }
};
