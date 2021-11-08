<form action="{{route('form.feedbackForm')}}" class="user-form" method="POST">
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

    <button class="uibtn uibtn-primary user-form__submit" type="submit">{{__('contacts.forms.submit')}}</button>
</form>
