<div class="contact-area">
    <div class="container">
    <form method="post" action="{{ route('store.message') }}" class="contact__form">
    	@csrf
        <div class="row">
            <div class="col-md-6">
                <input  name="name" type="text" placeholder="Enter your name*">
            </div>
            <div class="col-md-6">
                <input name="email" type="email" placeholder="Enter your mail*">
            </div>
            <div class="col-md-6">
                <input  name="subject" type="text" placeholder="Enter your subject*">
            </div>
            <div class="col-md-6">
                <input  name="phone" type="text" placeholder="Your Phone*">
            </div>
        </div>
        <textarea name="message" id="message" placeholder="Enter your massage*"></textarea>
        <button type="submit" class="btn">send massage</button>
    </form>
    </div>
</div>
<section class="about about__style__two"></section>