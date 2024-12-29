<script setup lang="ts">
import CoinDeskMarqueeScroll from '@/Components/CoinDesk/Scroll/CoinDeskMarqueeScroll.vue';
import CoinDeskAboutCompany from '@/Components/CoinDesk/Sections/CoinDeskAboutCompany.vue';
import CoinDeskAnyQuery from '@/Components/CoinDesk/Sections/CoinDeskAnyQuery.vue';
import CoinDeskCompanyDetails from '@/Components/CoinDesk/Sections/CoinDeskCompanyDetails.vue';
import CoinDeskContactUs from '@/Components/CoinDesk/Sections/CoinDeskContactUs.vue';
import CoinDeskCurrencyConvertor from '@/Components/CoinDesk/Sections/CoinDeskCurrencyConvertor.vue';
import CoinDeskHowItWork from '@/Components/CoinDesk/Sections/CoinDeskHowItWork.vue';
import CoinDeskLatestBlog from '@/Components/CoinDesk/Sections/CoinDeskLatestBlog.vue';
import CoinDeskOurClients from '@/Components/CoinDesk/Sections/CoinDeskOurClients.vue';
import CoinDeskOurTeamMember from '@/Components/CoinDesk/Sections/CoinDeskOurTeamMember.vue';
import CoinDeskOurValue from '@/Components/CoinDesk/Sections/CoinDeskOurValue.vue';
import CoinDeskWhatOurClientsSay from '@/Components/CoinDesk/Sections/CoinDeskWhatOurClientsSay.vue';
import CoinDeskWhyChooseUs from '@/Components/CoinDesk/Sections/CoinDeskWhyChooseUs.vue';
import CoinDeskSlider from '@/Components/CoinDesk/Slider/CoinDeskSlider.vue';

defineProps<{
    canLogin?: boolean;
    canRegister?: boolean;
}>();
</script>

<template>
    <coin-desk-slider></coin-desk-slider>
    <coin-desk-marquee-scroll></coin-desk-marquee-scroll>
    <coin-desk-our-value></coin-desk-our-value>
    <coin-desk-about-company></coin-desk-about-company>
    <coin-desk-why-choose-us></coin-desk-why-choose-us>
    <coin-desk-company-details></coin-desk-company-details>
    <coin-desk-how-it-work></coin-desk-how-it-work>
    <coin-desk-currency-convertor></coin-desk-currency-convertor>
    <coin-desk-our-team-member></coin-desk-our-team-member>
    <coin-desk-any-query></coin-desk-any-query>
    <coin-desk-latest-blog></coin-desk-latest-blog>
    <coin-desk-contact-us></coin-desk-contact-us>
    <coin-desk-what-our-clients-say></coin-desk-what-our-clients-say>
    <coin-desk-our-clients></coin-desk-our-clients>
</template>

<style scoped></style>
