<form action="{{route('form.feedbackForm')}}" data-form="contact-feedback" class="user-form" method="POST">

    {{--    <script data-b24-form="inline/44/x0c32o" data-skip-moving="true">--}}
    {{--      (function(w,d,u){--}}
    {{--        var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);--}}
    {{--        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);--}}
    {{--      })(window,document,'https://cdn.bitrix24.ua/b7708799/crm/form/loader_44.js');--}}
    {{--    </script>--}}
    {{--    --}}
    <h4 class="user-form__title">
        {{__('contacts.questions')}}
    </h4>
    <input type="text" name="name" value="" style="position: absolute; left: -9999px; display: none;">

    <div class="user-form__field">
        <input class="user-form__input" type="text" name="name_t" placeholder="{{__('contacts.forms.name')}}"
               required>
    </div>

    <div class="user-form__field">
        <input class="user-form__input" type="tel" name="phone" placeholder="{{__('contacts.forms.phone')}}"
               required>
    </div>

    <div class="user-form__field">
        <textarea name="text" class="user-form__textarea" placeholder="{{__('contacts.forms.messages')}}"></textarea>
    </div>

    <input type="hidden" name="url" value="{!! url()->current() !!}">

    {{--    <button class="uibtn uibtn-primary user-form__submit" type="submit">{{__('contacts.forms.submit')}}</button>--}}

    <button class="uibtn uibtn-primary user-form__submit g-recaptcha"
            data-sitekey="{{env('RECAPTCHA_V3_SITE_KEY')}}"
            data-callback="onSubmitContactFeedback"
            type="submit">{{__('contacts.forms.submit')}}</button>
    <script>
        function onSubmitContactFeedback() {
            submit(document.querySelector('[data-form="feedback-phone"]'));
        }
    </script>
</form>
