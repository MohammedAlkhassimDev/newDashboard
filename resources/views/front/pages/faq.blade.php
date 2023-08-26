@extends('layouts.app')

@section('content')

<!-- Start Breadcrumb -->
<div class="breadcrumbs text-center">
    <div class="container">
        <h1>Faq's</h1>
        <ul class="breadcrumb bg-transparent m-0 p-0 justify-content-center">
            <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
            <li class="breadcrumb-item active">Faqs</li>
        </ul>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Page Not Found -->
<div class="faqs-page font-15">
    <div class="container">
        <h3 class="faq-title">Frequently Asked Questions</h3>
        <div class="faq-desc mb-5">
            <p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>

        <div class="accordion faqs-tabs" id="faqs-tabs">
            <div class="card border-0 rounded-0 mb-4">
                <div class="card-header bg-transparent border-0 m-0 p-0 rounded-0" id="faqsOne">
                    <a class="btn btn-block" data-toggle="collapse" href="#faqcollapseOne" aria-expanded="true" aria-controls="faqcollapseOne">What is Lorem Ipsum?</a>
                </div>
                <div id="faqcollapseOne" class="collapse show" aria-labelledby="faqsOne" data-parent="#faqs-tabs">
                    <div class="card-body">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                </div>
            </div>
            <div class="card border-0 rounded-0 mb-4">
                <div class="card-header bg-transparent border-0 m-0 p-0 rounded-0" id="faqsTwo">
                    <a class="btn btn-block collapsed" data-toggle="collapse" href="#faqcollapseTwo" aria-expanded="false" aria-controls="faqcollapseTwo">Why do we use it?</a>
                </div>
                <div id="faqcollapseTwo" class="collapse" aria-labelledby="faqsTwo" data-parent="#faqs-tabs">
                    <div class="card-body">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                    </div>
                </div>
            </div>
            <div class="card border-0 rounded-0 mb-4">
                <div class="card-header bg-transparent border-0 m-0 p-0 rounded-0" id="faqsThree">
                    <a class="btn btn-block collapsed" data-toggle="collapse" href="#faqcollapseThree" aria-expanded="false" aria-controls="faqcollapseThree">Where does it come from?</a>
                </div>
                <div id="faqcollapseThree" class="collapse" aria-labelledby="faqsThree" data-parent="#faqs-tabs">
                    <div class="card-body">
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.
                    </div>
                </div>
            </div>
            <div class="card border-0 rounded-0 mb-4">
                <div class="card-header bg-transparent border-0 m-0 p-0 rounded-0" id="faqsFour">
                    <a class="btn btn-block collapsed" data-toggle="collapse" href="#faqcollapseFour" aria-expanded="false" aria-controls="faqcollapseFour">Where can I get some?</a>
                </div>
                <div id="faqcollapseFour" class="collapse" aria-labelledby="faqsFour" data-parent="#faqs-tabs">
                    <div class="card-body">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.
                    </div>
                </div>
            </div>
            <div class="card border-0 rounded-0 mb-4">
                <div class="card-header bg-transparent border-0 m-0 p-0 rounded-0" id="faqsFive">
                    <a class="btn btn-block collapsed" data-toggle="collapse" href="#faqcollapseFive" aria-expanded="false" aria-controls="faqcollapseFive">Where can I get some?</a>
                </div>
                <div id="faqcollapseFive" class="collapse" aria-labelledby="faqsFive" data-parent="#faqs-tabs">
                    <div class="card-body">
                        Donec auctor est ut ligula elementum efficitur. <br>
                        Pellentesque at purus cursus, ullamcorper turpis quis, ultrices risus. <br>
                        Aliquam quis nulla in justo ullamcorper venenatis congue et nisl. <br>
                        Donec ac mi rhoncus, semper dolor eu, blandit tortor. <br>
                        Aliquam volutpat eros ac odio aliquam, ut faucibus dui iaculis. <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
