<section class="section section-lg bg-default novi-background bg-cover text-center">
    <div class="container">
        <h3>Our next Service</h3>
        <h4>{{$nextServiceDayName}}</h4>
        <div class="row row-fix row-50 justify-content-lg-center">
            <div class="col-lg-10 col-xl-9 col-xxl-8">
                <div class="countdown-wrap">
                    <div class="DateCountdown" 
                        data-type="until" 
                        data-date="{{ $nextService }}" data-format="wdhms"
                        data-color="#ed1c94" data-bg="rgba(255, 255, 255, 1)" data-width="0.02">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

