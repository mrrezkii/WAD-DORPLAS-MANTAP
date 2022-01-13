@extends('layouts.main')

@section('container')
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <h4 class="m-0 font-weight-bold text-blue my-5">Frequently Asked Questions (FAQ)</h4>
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="faqOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-grey text-title1 text-decoration-none"
                                    data-toggle="collapse" data-target="#collapseFaqOne" aria-expanded="true"
                                    aria-controls="collapseFaqOne">
                                <span><i class="fas fa-question-circle text-red"></i></span>
                                Apa itu Dorplas ?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseFaqOne" class="collapse show" aria-labelledby="faqOne" data-parent="#accordion">
                        <div class="card-body text-decoration-none">
                            <span><i class="fas fa-quote-right text-red"></i></span>
                            <p class="text-title1" style="color: #0B090A">Dorplas adalah sebuah platform berbasis web &
                                mobile yang memudahkan seseorang untuk melakukan donor plasma konvalesen yang langsung
                                terhubung dengan Kantor Palang Merah Indonesia di setiap kota di Indonesia.</p>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-grey text-title1 text-decoration-none"
                                    data-toggle="collapse" data-target="#collapseFaqTwo" aria-expanded="false"
                                    aria-controls="collapseFaqTwo">
                                <span><i class="fas fa-question-circle text-red"></i></span>
                                Apakah Dorplas adalah bagian dari Palang Merah Indonesia (PMI)? ?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseFaqTwo" class="collapse" aria-labelledby="faqTwo" data-parent="#accordion">
                        <div class="card-body text-decoration-none">
                            <span><i class="fas fa-quote-right text-red"></i></span>
                            <p class="text-title1" style="color: #0B090A">Iya. Dorplas bergerak dan berkolaborasi
                                bersama Palang Merah Indonesia (PMI) untuk untuk membantu orang-orang yang membutuhkan
                                plasma darah dalam proses pengobatan COVID-19 guna menurunkan lonjakan angka kematian
                                akibat COVID-19.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-grey text-title1 text-decoration-none"
                                    data-toggle="collapse" data-target="#collapseFaqThree" aria-expanded="false"
                                    aria-controls="collapseFaqThree">
                                <span><i class="fas fa-question-circle text-red"></i></span>
                                Apakah donor plasma konvalesen itu menyakitkan?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseFaqThree" class="collapse" aria-labelledby="faqThree" data-parent="#accordion">
                        <div class="card-body text-decoration-none">
                            <span><i class="fas fa-quote-right text-red"></i></span>
                            <p class="text-title1" style="color: #0B090A">Sakit yang dirasakan hanya sesaat, seperti
                                dicubit. Takut akan jarum menjadi faktor utama yang menyebabkan banyak orang berpikir
                                bahwa proses donor plasma konvalesen akan menyakitkan. Sebagian besar calon pendonor
                                merasa takut akan jarum, namun akhirnya merasakan proses donor plasma konvalesen tidak
                                sesakit yang dipikirkan. Kamu dapat membaca beberapa tips yang dapat dilakukan untuk
                                membantu proses donor plasma konvalesen pertama menjadi lebih nyaman.</p>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-grey text-title1 text-decoration-none"
                                    data-toggle="collapse" data-target="#collapseFaqFour" aria-expanded="false"
                                    aria-controls="collapseFaqFour">
                                <span><i class="fas fa-question-circle text-red"></i></span>
                                Kenapa donor plasma konvalesen itu penting?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseFaqFour" class="collapse" aria-labelledby="faqFour" data-parent="#accordion">
                        <div class="card-body text-decoration-none">
                            <span><i class="fas fa-quote-right text-red"></i></span>
                            <p class="text-title1" style="color: #0B090A">Sesuai dengan slogan dari PMI: “Mereka
                                selamat, kita sehat”. Donor plasma konvalesen dapat menyelamatkan nyawa pasien yang
                                membutuhkan transfusi plasma untuk alternatif pengobat covid. Selain menyelamatkan nyawa
                                pasien, donor plasma konvalesen juga menyehatkan pendonornya, karena membantu regenerasi
                                sel darah baru sehingga mengurangi risiko serangan jantung, kanker dan sebagainya.</p>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-grey text-title1 text-decoration-none"
                                    data-toggle="collapse" data-target="#collapseFaqFive" aria-expanded="false"
                                    aria-controls="collapseFaqFive">
                                <span><i class="fas fa-question-circle text-red"></i></span>
                                Siapa dibalik Dorplas ?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseFaqFive" class="collapse" aria-labelledby="faqFive" data-parent="#accordion">
                        <div class="card-body text-decoration-none">
                            <span><i class="fas fa-quote-right text-red"></i></span>
                            <p class="text-title1 text-grey">
                                - Alif Yanuar Aditya Subagyo <br>
                                - Bagus Tri Atmaja <br>
                                - Muhammad Ihsan Izzulhaq <br>
                                - Muhammad Rezki Ananda <br>
                                - Yanuar Taruna Lutfi <br>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
