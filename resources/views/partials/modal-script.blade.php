@if(env('APP_ENV') !== 'local')
    <script src="https://ct.streamtele.com/api/v1/testing.js"></script>
    <script>
        ct_test.init('1af0894b912371214d1c235b5cfabad9', 'https://ct.streamtele.com/');
    </script>
    <script src="https://ct.streamtele.com/api/v1/script.js"></script>
    <script>
        ct.init('1af0894b912371214d1c235b5cfabad9', 'https://ct.streamtele.com/');
    </script>
{{--    {!!  GoogleReCaptchaV3::renderField('user_form_id','user_form_action') !!}--}}
@endif
