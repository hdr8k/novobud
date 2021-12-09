<div class="modal-window" id="close-page">
    <div class="modal-wrap">
        <i class="close-modal"></i>
        <div class="modal-block">
            <div class="modal-title">Не нашли то, что искали?<span>Наши специалисты подберут для вас необходимый вариант, БЕСПЛАТНО!</span>
            </div>
            <div class="modal-content">
                <form class="form-send" method="POST">
                    <input type="text" name="phone" required="required" placeholder="Ваш номер телефона">
                    <input type="submit" value="Перезвонить">
                    <input type="hidden" name="subject" value="Не нашли то, что искали?">
                    <input type="hidden" name="from" value="novobud.pl.ua">
                </form>
            </div>
        </div>
        <div class="send-ok"></div>
    </div>
</div>


<div class="ui-modal" id="feedback">
    <div class="ui-modal__content">
        <form action="{{route('form.feedbackForm')}}" class="user-form" method="POST">
        
           <script data-b24-form="click/46/5f0i05" data-skip-moving="true">
              (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
              })(window,document,'https://cdn.bitrix24.ua/b7708799/crm/form/loader_46.js');
            </script>
            
            <h4 class="user-form__title">
                {{__('feedback.title')}}
            </h4>
            <input type="text" name="name" value="" style="position: absolute; left: -9999px; display: none;">
            <div class="user-form__field">
                <input class="user-form__input" type="text" name="name_t" placeholder="{{__('feedback.name')}}"
                       required="">
            </div>

            <div class="user-form__field">
                <input class="user-form__input" type="tel" name="phone" placeholder="{{__('feedback.phone')}}"
                       required="">
            </div>

            <div class="user-form__field">
                <textarea name="text" class="user-form__textarea" placeholder="{{__('feedback.messages')}}"></textarea>
            </div>

            <input type="hidden" name="url" value="{!! url()->current() !!}">

            <button class="uibtn uibtn-primary user-form__submit" type="submit">{{__('feedback.submit')}}</button>
        </form>

        <button class="ui-modal__close" data-close-modal="feedback">
            <i>×</i>
        </button>
    </div>
</div>

<div class="ui-modal" id="feedback-flat">
    <div class="ui-modal__content">
        <form action="{{route('form.feedbackForm')}}" class="user-form" method="POST">
        
        <script data-b24-form="click/48/5g0i89" data-skip-moving="true">
          (function(w,d,u){
            var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
            var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
          })(window,document,'https://cdn.bitrix24.ua/b7708799/crm/form/loader_48.js');
        </script>
        
            <h4 class="user-form__title">
                {{__('houses/house.title_form')}}
            </h4>

            <input type="text" name="name" value="" style="position: absolute; left: -9999px; display: none;">
            <div class="user-form__field">
                <input class="user-form__input" type="text" name="name_t" placeholder="{{__('feedback.name')}}"
                       required="">
            </div>

            <div class="user-form__field">
                <input class="user-form__input" type="tel" name="phone" placeholder="{{__('feedback.phone')}}"
                       required="">
            </div>

            <input type="hidden" name="url" value="{!! url()->current() !!}">

            <div class="user-form__field">
                <textarea name="text" class="user-form__textarea" placeholder="{{__('feedback.messages')}}"></textarea>
            </div>

            <button class="uibtn uibtn-primary user-form__submit" type="submit">{{__('feedback.submit')}}</button>
        </form>

        <button class="ui-modal__close" data-close-modal="feedback-flat">
            <i>×</i>
        </button>
    </div>
</div>

<div class="ui-modal" id="feedback-phone">
    <div class="ui-modal__content">
        <form action="{{route('form.recallForm')}}" class="user-form" method="POST">
            <h4 class="user-form__title">
                {{__('recall.title')}}
            </h4>
            <input type="text" name="name" value="" style="position: absolute; left: -9999px; display: none;">
            <div class="user-form__field">
                <input class="user-form__input" type="tel" name="phone" placeholder="{{__('recall.phone')}}"
                       required="">
            </div>

            <button class="uibtn uibtn-primary user-form__submit" type="submit">{{__('recall.submit')}}</button>
        </form>

        <button class="ui-modal__close" data-close-modal="feedback-phone">
            <i>×</i>
        </button>
    </div>
</div>

<div class="ui-modal" id="feedback-success">
    <div class="ui-modal__content">
        <div class="modal-content">
            <h4>{{__('feedback.success.title')}}</h4>
            <p>
                {{__('feedback.success.content')}}
            </p>
            <div class="ui-modal__icon">
                <img src="{{asset('img/feedback/callblue.svg')}}">
            </div>
        </div>

        <button class="ui-modal__close" data-close-modal="feedback-success">
            <i>×</i>
        </button>
    </div>
</div>
