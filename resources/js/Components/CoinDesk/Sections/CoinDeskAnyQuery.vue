<script setup lang="ts">
import { getImportedAsset } from '@/utils/assets';
</script>

<template>
    <div class="section-full no-col-gap bg-repeat">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 bg-secondry">
                    <div class="section-content p-tb60 p-r30 clearfix">
                        <div class="wt-left-part any-query">
                            <img
                                :src="getImportedAsset('images/any-query.png')"
                                alt=""
                            />
                            <div class="text-center">
                                <h3
                                    class="text-uppercase font-weight-500 text-white"
                                >
                                    Any Query?
                                </h3>
                                <p class="text-white">
                                    Feel free to reach out if you have any questions or need assistance. We're here to help!
                                </p>
                                <h4 class="site-text-primary m-b0">
                                    0 321 576 444
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 site-bg-primary">
                    <div class="section-content p-tb60 p-l30 clearfix">
                        <div class="wt-right-part any-query-contact">
                            <img
                                :src="
                                    getImportedAsset(
                                        'images/any-query-contact.png',
                                    )
                                "
                                alt=""
                            />
                            <div class="text-center">
                                <h3
                                    class="text-uppercase font-weight-500 text-white"
                                >
                                    Contact Us
                                </h3>
                                <p class="text-white">
                                    If you have any questions or need further information, don’t hesitate to reach out.
                                </p>
                                <h4 class="text-secondry m-b0">
                                    support@coindesk.com
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
