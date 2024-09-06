<section id="faq-section">
    <div class="container col-10 pb-1 pt-5">

        <div class="faq-top row d-flex justify-content-between pt-5">
            <div class="left-section col-6">
                <h1 class="display-1 fw-bold mb-5">{{ __('Questions') }}</h1>

                <div class="mb-3 accent-text mt-5">{{ __('General_questions') }}</div>
            </div>
            <div class="col-12 col-md-5 text-start text-md-end mail-hyphen mb-5">
                <span class="paragraph-regular-20">{!! __('general_questions_paragraph') !!}</span>
            </div>
        </div>

        <div class="pb-5 mb-5">
            <div class="row justify-content-end">
                <div class="col-12 col-md-6">
                    <div class="accordion" id="accordionExample">
                        <!-- Accordion Item 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header text-regular-20" id="headingFirst">
                                <button class="accordion-button collapsed text-regular-20 fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFirst" aria-expanded="false"
                                    aria-controls="collapseFirst">
                                    {{ __('isSignupRequired') }}
                                </button>
                            </h2>
                            <div id="collapseFirst" class="accordion-collapse collapse" aria-labelledby="headingFirst">
                                <div class="accordion-body">
                                    {{ __('isSignupRequiredAnswer') }}
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header text-regular-20" id="headingTwo">
                                <button class="accordion-button collapsed text-regular-20 fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    {{ __('isOnlineSignupEnough') }}
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                                <div class="accordion-body">
                                    {{ __('isOnlineSignupEnoughAnswer') }}
                                </div>
                            </div>
                        </div>
                        <!-- Accordion Item 2.5 added after -->
                        <div class="accordion-item">
                            <h2 class="accordion-header text-regular-20" id="headingTwoAddedAfter">
                                <button class="accordion-button collapsed text-regular-20 fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwoAddedAfter"
                                    aria-expanded="false" aria-controls="collapseTwoAddedAfter">
                                    {{ __('whoCreatesRooms') }}
                                </button>
                            </h2>
                            <div id="collapseTwoAddedAfter" class="accordion-collapse collapse"
                                aria-labelledby="headingTwoAddedAfter">
                                <div class="accordion-body">
                                    {{ __('whoCreatesRoomsAnswer') }}
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header text-regular-20" id="headingTwoNhalf">
                                <button class="accordion-button collapsed text-regular-20 fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwoNHalf" aria-expanded="false"
                                    aria-controls="collapseTwoNHalf">
                                    {{ __('whenIsTheInscriptionConsideredSafe') }}
                                </button>
                            </h2>
                            <div id="collapseTwoNHalf" class="accordion-collapse collapse"
                                aria-labelledby="headingTwoNhalf">
                                <div class="accordion-body">
                                    {{ __('whenIstheInscriptionConsideredSafeAnsware') }}
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 5 (Initially Hidden) -->
                        <div class="accordion-item d-none">
                            <h2 class="accordion-header text-regular-20" id="headingThree">
                                <button class="accordion-button collapsed text-regular-20 fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    {{ __('whenIsTheInscriptionDeadline') }}
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                                <div class="accordion-body">
                                    {{ __('whenIsTheInscriptionDeadlineAnsware') }}
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 6 (Initially Hidden) -->
                        <div class="accordion-item d-none">
                            <h2 class="accordion-header text-regular-20" id="headingTwoo">
                                <button class="accordion-button collapsed text-regular-20 fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwoo" aria-expanded="false"
                                    aria-controls="collapseTwoo">
                                    {{ __('ChurchNotInList') }}
                                </button>
                            </h2>
                            <div id="collapseTwoo" class="accordion-collapse collapse" aria-labelledby="headingTwoo">
                                <div class="accordion-body">
                                    {{ __('ChurchNotInListAnswer') }}
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 7 (Initially Hidden) -->
                        <div class="accordion-item d-none">
                            <h2 class="accordion-header text-regular-20" id="headingFour">
                                <button class="accordion-button collapsed text-regular-20 fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    {{ __('singleDayParticipationQuestion') }}
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                                <div class="accordion-body">
                                    {{ __('singleDayParticipationAnswer') }}
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 8 (Initially Hidden) -->
                        <div class="accordion-item d-none">
                            <h2 class="accordion-header text-regular-20" id="headingFive">
                                <button class="accordion-button collapsed text-regular-20 fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    {{ __('participateWithoutHousingAndMeal') }}
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
                                <div class="accordion-body">
                                    {{ __('participateWithoutHousingAndMealAnswer') }}
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 9 (Initially Hidden) -->
                        <div class="accordion-item d-none">
                            <h2 class="accordion-header text-regular-20" id="headingSix">
                                <button class="accordion-button collapsed text-regular-20 fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseSix">
                                    {{ __('minimumAgeQuestion') }}
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix">
                                <div class="accordion-body">
                                    {{ __('minimumAgeAnswer') }}
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 10 (Initially Hidden) -->
                        <div class="accordion-item d-none">
                            <h2 class="accordion-header text-regular-20" id="headingSeven">
                                <button class="accordion-button collapsed text-regular-20 fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                                    aria-controls="collapseSeven">
                                    {{ __('amountToPayForChildren') }}
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse"
                                aria-labelledby="headingSeven">
                                <div class="accordion-body">
                                    {{ __('amountToPayForChildrenAnswer') }}
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 11 (Initially Hidden) -->
                        <div class="accordion-item d-none">
                            <h2 class="accordion-header text-regular-20" id="headingEight">
                                <button class="accordion-button collapsed text-regular-20 fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                                    aria-controls="collapseEight">
                                    {{ __('specialProgramforKids') }}
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse"
                                aria-labelledby="headingEight">
                                <div class="accordion-body">
                                    {{ __('specialProgramforKidsAnswer') }}
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 12 (Initially Hidden) -->
                        <div class="accordion-item d-none">
                            <h2 class="accordion-header text-regular-20" id="headingNine">
                                <button class="accordion-button collapsed text-regular-20 fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false"
                                    aria-controls="collapseNine">
                                    {{ __('reimbursementQuestion') }}
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine">
                                <div class="accordion-body">
                                    {{ __('reimbursementAnswer') }}
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 13 (Initially Hidden) -->
                        <div class="accordion-item d-none">
                            <h2 class="accordion-header text-regular-20" id="headingTen">
                                <button class="accordion-button collapsed text-regular-20 fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false"
                                    aria-controls="collapseTen">
                                    {{ __('onlinePayment') }}
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen">
                                <div class="accordion-body">
                                    {{ __('onlinePaymentAnswer') }}
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- "See More" Button -->
                    <div class="text-end mt-4">
                        <button id="seeMoreBtn" class="btn">{{ __('seeMoreQuestions') }}</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var seeMoreQuestions = @json(__('seeMoreQuestions'));
    var seeLessQuestions = @json(__('seeLessQuestions'));

    document.getElementById('seeMoreBtn').addEventListener('click', function() {
        var hiddenItems = document.querySelectorAll('.accordion-item.d-none');
        var button = this;

        if (hiddenItems.length > 0) {
            hiddenItems.forEach(function(item) {
                item.classList.remove('d-none');
            });
            button.textContent = seeLessQuestions;
        } else {
            // Hide all items except the first 4
            var itemsToHide = document.querySelectorAll('.accordion-item:not(:nth-of-type(-n+4))');
            itemsToHide.forEach(function(item) {
                item.classList.add('d-none');
            });
            button.textContent = seeMoreQuestions;
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        var itemsToHide = document.querySelectorAll('.accordion-item:not(:nth-of-type(-n+4))');
        itemsToHide.forEach(function(item) {
            item.classList.add('d-none');
        });
    });
</script>
