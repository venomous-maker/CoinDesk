<script setup lang="ts">
import { getImportedAsset } from '@/utils/assets';
</script>

<template>
    <div class="section-full tw-con-with-img bg-gray">
        <div
            class="overlay-wraper bg-gray bg-cover bg-center bg-no-repeat"
            :style="{
                backgroundImage:
                    'url(' +
                    getImportedAsset('images/background/bg2.jpg') +
                    ')',
            }"
        >
            <div class="overlay-main opacity-07 bg-black"></div>
            <div class="container">
                <div class="row conntact-home">
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="section-content p-tb70">
                            <!-- TITLE -->
                            <div class="section-head text-left text-white">
                                <h2 class="text-uppercase">
                                    Request A Call Back
                                </h2>
                                <div class="wt-separator-outer">
                                    <div
                                        class="wt-separator site-bg-primary"
                                    ></div>
                                </div>
                            </div>
                            <!-- TITLE -->
                            <div class="contact-home-left">
                                <form
                                    class="cons-contact-form"
                                    method="post"
                                    action="form-handler2.php"
                                >
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input
                                                    name="username"
                                                    type="text"
                                                    required
                                                    class="form-control"
                                                    placeholder="Name"
                                                />
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input
                                                    name="email"
                                                    type="text"
                                                    class="form-control"
                                                    required
                                                    placeholder="Email"
                                                />
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input
                                                    name="phone"
                                                    type="text"
                                                    class="form-control"
                                                    required
                                                    placeholder="Phone"
                                                />
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input
                                                    name="subject"
                                                    type="text"
                                                    class="form-control"
                                                    required
                                                    placeholder="Subject"
                                                />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea
                                                    name="message"
                                                    class="form-control"
                                                    rows="4"
                                                    placeholder="Message"
                                                ></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button
                                                type="submit"
                                                class="site-button skew-icon-btn btn-block"
                                            >
                                                <span
                                                    class="font-18 text-uppercase p-lr15 inline-block"
                                                    >Submit Now</span
                                                >
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="contact-home-right">
                        <div>
                            <img
                                :src="getImportedAsset('images/st-1.png')"
                                class="st-1"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
