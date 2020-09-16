<form action="{{ route('subscriber') }}" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="subscribe-form validate">
   @csrf
    <div id="mc_embed_signup_scroll">
        <label for="mce-EMAIL" class="d-none"></label>
        <input type="email" value="" name="email" class="email" id="mce-EMAIL" placeholder="Email" required>
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
        <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button">@lang('home.send')</button>
    </div>
</form>