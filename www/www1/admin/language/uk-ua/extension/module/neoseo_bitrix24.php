<?php

// Heading
$_['heading_title'] = '<img width="24" height="24" src="view/image/neoseo.png" style="float: left;"><span style="margin:0;line-height: 24px;">NeoSeo Обмен с Bitrix24</span>';
$_['heading_title_raw'] = 'NeoSeo Обмен с Bitrix24';

//Tabs
$_['tab_general'] = 'Основные настройки';
$_['tab_logs'] = 'Логи';
$_['tab_support'] = 'Поддержка';
$_['tab_license'] = 'Лицензия';
$_['tab_lead'] = 'Лиды';
$_['tab_deal'] = 'Сделки';
$_['tab_contact'] = 'Контакты';

// Text
$_['text_module_version'] = '';
$_['text_success'] = 'Настройки модуля обновлены!';
$_['text_module'] = 'Модули';
$_['text_success_clear'] = 'Лог файл успешно очищен!';
$_['text_clear_log'] = 'Очистить лог';
$_['text_clear'] = 'Очистить';
$_['text_match_table_contact_type'] = 'Таблица соответствий: Группа покупателя на сайте - Тип контакта в Bitrix24';
$_['text_match_table_deal_stage'] = 'Таблица соответствий: Статус заказа на сайте - Стадия сделки в Bitrix24';
$_['text_match_table_deal_type'] = 'Таблица соответствий: Категория на сайте - Тип сделки в Bitrix24';
$_['text_both'] = 'Телефон и email';
$_['text_email'] = 'По email';
$_['text_telephone'] = 'По телефону';

//Columns
$_['column_customer_group'] = 'Группа покупателя';
$_['column_type_contact'] = 'Тип контакта';
$_['column_order_status'] = 'Статус заказа';
$_['column_deal_stage'] = 'Стадия сделки';
$_['column_category'] = 'Категория';
$_['column_deal_type'] = 'Тип сделки';

//Buttons
$_['button_save'] = 'Сохранить';
$_['button_save_and_close'] = 'Сохранить и Закрыть';
$_['button_close'] = 'Закрыть';
$_['button_recheck'] = 'Проверить еще раз';
$_['button_clear_log'] = 'Очистить лог';
$_['button_download_log'] = 'Скачать файл логов';

// Entry
$_['entry_debug'] = 'Отладочный режим:<br /><span class="help">В логи модуля будет писаться различная информация для разработчика модуля.</span>';
$_['entry_status'] = 'Статус';
$_['entry_portal_name'] = 'Название портала';
$_['entry_portal_name_desc'] = 'Название портала можно получить через ссылку в создании вебхука. Указывается лишь название портала, без bitrix24. Например, название портала test.bitrix24. В поле необходимо указать <b>test</b>';
$_['entry_id_user'] = 'Идентификатор пользователя';
$_['entry_id_user_desc'] = 'Числовой идентификатор пользователя, создавшего вебхук. Под правами этого пользователя будет работать этот вебхук. ИД можно получить через ссылку в создании вебхука';
$_['entry_secret_code'] = 'Секретный код';
$_['entry_secret_code_desc'] = 'Секретный код, можно получить через ссылку в создании вебхука';
$_['entry_domain'] = 'Домен для синхронизации';

$_['entry_lead_user_id'] = 'Пользователь, который ответственный за лиды';

$_['entry_add_lead_register'] = 'Создавать лид при регистрации';
$_['entry_add_lead_register_desc'] = 'Лид будет создан только при использовании стандартных методов регистрации';
$_['entry_add_lead_neoseo_catch_contacts'] = 'Создавать лид при создании заявки в модуле "NeoSeo Захват контактов"';
$_['entry_add_lead_neoseo_catch_contacts_desc'] = 'Лид будет создан только при наличии установленного модуля "NeoSeo Захват контактов"';
$_['entry_add_lead_neoseo_notify_when_available'] = 'Создавать лид при создании заявки в модуле "NeoSeo Подписка на поступление товара"';
$_['entry_add_lead_neoseo_notify_when_available_desc'] = 'Лид будет создан только при наличии установленного модуля "NeoSeo Подписка на поступление товара"';

$_['entry_source_lead_register'] = 'Источник при  регистрации';
$_['entry_source_lead_neoseo_account_register'] = 'Источник при регистрации в модуле "NeoSeo Личный кабинет покупателя"';
$_['entry_source_lead_neoseo_checkout_register'] = 'Источник при регистрации в модуле "NeoSeo Оформление заказа"';
$_['entry_source_lead_neoseo_catch_contacts'] = 'Источник при создании заявки в модуле "NeoSeo Захват контактов"';
$_['entry_source_lead_neoseo_notify_when_available'] = 'Источник при создании заявки в модуле "NeoSeo Подписка на поступление товара"';

$_['entry_add_deal_order'] = 'Создавать сделку при создании заказа';
$_['entry_add_deal_order_desc'] = 'Сделка будет создана при использовании стандартных методов создания заказа';
$_['entry_deal_user_id'] = 'Пользователь, который ответственный за сделки';
$_['entry_deal_stage_default'] = 'Стадия сделки по умолчанию';
$_['entry_deal_stage_default_desc'] = 'Применяется, если статус заказа не выбран в таблице соответствий.';
$_['entry_deal_type_default'] = 'Тип сделки по умолчанию';
$_['entry_deal_type_default_desc'] = 'Применяется, если категория не выбрана в таблице соответствий.';
$_['entry_deal_extra_property'] = 'Выгружать расширенные данные по сделке';
$_['entry_unload_options'] = 'Выгружать опции в комментарии к сделке';
$_['entry_unload_order_status'] = 'Создавать сделку, если заказу присвоен статус';

$_['entry_add_contact'] = 'Создавать контакт перед созданием лида';
$_['entry_contact_user_id'] = 'Пользователь, который ответственный за контакты';
$_['entry_source_contact'] = 'Источник при создании контакта';
$_['entry_type_contact_default'] = 'Тип контакта по умолчанию';
$_['entry_type_contact_default_desc'] = 'Применяется, если группа покупателя не выбрана в таблице соответствий.';
$_['entry_one_deal'] = 'Весь заказ отдавать одной сделкой';
$_['entry_one_deal_desc'] = 'Передавать все твоары заказа и данные о заказе одной сделкой';
$_['entry_product_model_name'] = 'Добавить модель к названию товара';
$_['entry_not_add_new_contact'] = 'Если не найден контакт в битрикс - добавить лид без контакта';
$_['entry_custom_field_phone'] = 'Укжите название доп. поля для заказа где используется телефон';
$_['entry_custom_field_phone_desc'] = 'Если в заказе нет онсовного телефона, модуль заберет из дополнительного поля заказа телефон';
$_['entry_search_contact_by'] = 'По какому методу искать контакты в Битрикс24';

$_['entry_deal_extra_property_desc'] = '<b>Варианты настройки опции "выгружать расширенные данные по сделке":</b>
<ol>
    <li>Если в сделке Вам нужно выгружать дополнительные данные по заказу, укажите <b>Название;Таблица БД;Поле</b>, где
        <ul>
            <li>
                <b>Название</b> - название идентификатора поля в Битрикс24, в который будет помещены дополнительные данные, 
            </li>
            <li>
                <b>Таблица БД</b> - таблица из которой будет взято дополнительные данные,
            </li>
            <li>
                <b>Поле</b> - поле таблицы, из которого будет взято значение и помещено в дополнительное поле. 
            </li>
        </ul>
    </li>
    <b>Пример:</b> UF_CRM_5EB107860C481;oc_order;shipping_address_1 <br>
    <b>ВАЖНО!</b> Обязательное наличие в таблице одного из полей order_id или customer_id.<br> 
<br>
	<li>Если в сделке Вам нужно выгружать дополнительные данные по заказу с доп. проверкой, укажите <br><b>Название;Таблица БД;Поле по которому искать=Его значение=Поле которое надо получить</b>,<br> где
        <ul>
            <li>
                <b>Название</b> - название идентификатора поля в Битрикс24, в который будет помещены дополнительные данные, 
            </li>
            <li>
                <b>Таблица БД</b> - таблица из которой будет взято дополнительные данные,
            </li>
            <li>
                <b>Поле по которому искать</b> - поле таблицы, по которому необходимо выполнять дополнительный поиск.
            </li>
            <li>
                <b>Его значение</b> - Это значение которое должно присутствовать в предыдущем поле и по нему проводить поиск
            </li>
            <li>
                <b>Поле которое надо получить</b> - поле таблицы, из которого будет взято значение и помещено в дополнительное поле. 
            </li>
        </ul>
    </li>
    <b>Пример:</b> UF_CRM_5EB107860C481;oc_order;shipping_address_1 <br>
    <b>ВАЖНО!</b> Обязательное наличие в таблице одного из полей order_id или customer_id.<br> 
<br>
    <li>Если в сделке Вам нужно выгружать дополнительные поля по заказу (раздел "Настраиваемые поля"), укажите <b>Название;[Поле]</b>, где
        <ul>
            <li>
                <b>Название</b> - название идентификатора поля в Битрикс24, в который будет помещены данные из дополнительных полей заказа, 
            </li>
            <li>
                <b>Поле</b> - название настраиваемого поля в системе Opencart.
            </li>
        </ul>
    </li>
    <b>Пример:</b> UF_CRM_5EB107861638B;[Улица] <br>
<br>
    <li>
Если в сделке Вам нужно выгрузить ссылку на заказ, укажите  <b>Название;{order_link}</b>, где
        <ul>
            <li>
                <b>Название</b> - название идентификатора поля в Битрикс24, в которое будет помещена ссылка на заказ, 
            </li>
            <li>
                <b>{order_link}</b> - шаблон
            </li>
        </ul>
    </li>
    <b>Пример:</b> UF_CRM_5EB3E1B87E310:{order_link} <br>
</ol>
    <b>ВАЖНО!</b> Разбор указанных полей должен быть настроен в Битрикс 24. Каждая запись с новой строки. <br> ';

// Error
$_['error_permission'] = 'У Вас нет прав для управления этим модулем!';
$_['error_empty_params'] = 'Для отображения списка выбора пользователей и источников (вкладка Контакты, Лиды и Сделки) необходимо заполнить основные параметры модуля и сохранить настройки!';
$_['error_download_logs'] = 'Файл логов пустой или отсутствует!';
$_['error_ioncube_missing'] = '';
$_['error_license_missing'] = '';
$_['mail_support'] = '';
$_['module_licence'] = '';
$_['text_module_version']='17';
$_['error_license_missing']='<h3 style = "color: red"> Відсутній файл з ключем! </h3>

<p> Для отримання файлу з ключем зв`яжіться з NeoSeo по email <a href="mailto:license@neoseo.com.ua"> license@neoseo.com.ua </a>, при цьому вкажіть: </p>
<ul>
	<li> назву сайту, на якому ви купили модуль, наприклад, https://neoseo.com.ua </li>
	<li> назву модуля, який ви купили, наприклад: NeoSeo Обмін з 1С:Підприємство </li>
	<li> ваше ім`я користувача (нік-нейм) на цьому сайті, наприклад, NeoSeo </li>
	<li> номер замовлення на цьому сайті, наприклад, 355446 </li>
	<li> основний домен сайту для якого буде активований файл з ключем, наприклад, https://neoseo.ua </li>
</ul>

<p> Отриманий файл з ключем покладіть у корінь сайту, тобто поруч з файлом robots.txt і натисніть кнопку "Перевірити ще раз".</p>';
$_['error_ioncube_missing']='<h3 style="color: red">Відсутній IonCube Loader!</h3>

<p>Щоб користуватися нашим модулем, вам потрібно встановити IonCube Loader.</p>

<p>Для установки зверніться до ТП Вашого хостингу</p>

<p>Якщо ви не можете встановити IonCube Loader самостійно, у вас є можливість попросити допомоги у наших фахівців за адресою <a href="mailto:info@neoseo.com.ua"> info@neoseo.com.ua </a></p>';
$_['module_licence']='<h2>Ліцензійні умови згоди на використання програмного забезпечення NeoSeo</h2>
<p>Дякуємо вам за покупку програмних продуктів нашої веб-студії.</p>
<p>Нижче наведені юридичні умови, які поширюються на всіх, хто відвідує наш сайт і користується нашими програмними продуктами або послугами. Дані умови спрямовані на те, щоб захистити ваші інтереси та інтереси ТОВ "НЕОСЕО" і його афілійованих структур і осіб (далі, "ми", "NeoSeo"), які виступають в договорах від його імені.</p>
<p><strong>1. Введення</strong></p>
<p>Ці Умови використання NeoSeo ( "Умови використання") поряд з додатковими умовами, які стосуються ряду конкретних послуг або програмних продуктів, розробок і представлені на веб-сайті (-ів) NeoSeo, містять умови і положення, дія яких поширюється на кожного відвідувача або користувача ( "Користувач", "ви" або "Покупець") веб-сайту NeoSeo, додатків, доповнень і компонентів, запропонованих нами поряд з наданням послуг і веб-сайту, якщо не вказано інше (всі послуги та програмне забезпечення, програмні модулі запропоновані через веб-сайт NeoSeo або допоміжні сервіси, веб-сервіси, ін. додатки від імені NeoSeo спільно іменуються - "Послуги NeoSeo" або "Послуги").</p>
<p>Умови NeoSeo є обов`язковим контрактом між NeoSeo і вами - тому просимо вас уважно ознайомитися з ними.</p>
<p>Ви можете відвідувати і / або використовувати Послуги NeoSeo тільки в тому випадку, якщо повністю згодні з Умовами NeoSeo: використовуючи будь-яку з Послуг NeoSeo і / або підписуючись на неї, ви висловлюєте і підтверджуєте свою згоду з даними Умовами користування та іншими Умовами NeoSeo, наприклад, умови надання послуг програмування в розрізі типових і нетипових завдань, які виписані тут:   <a href="https://neoseo.com.ua/vse-chto-nujno-znat-klienty" target="_blank" class="external">https://neoseo.com.ua/vse-chto-nujno-znat-klienty</a> , (далі Умови NeoSeo).</p>
<p>Якщо ви не можете прочитати Умови NeoSeo, не знаєте їх або не згодні з ними, ви повинні покинути Веб-сайт NeoSeo і не користуватися Послугами NeoSeo.</p>
<p>Використовуючи наші Програмні продукти, Сервіси і Послуги, ви підтверджуєте, що ознайомилися з нашою Політикою конфіденційності, доступною до перегляду за адресою <a href="https://neoseo.com.ua/politika-konfidencialnosti" target="_blank" class="external">https://neoseo.com.ua/politika-konfidencialnosti</a>   ("Політика конфіденційності").</p>
<p>Цей документ є ліцензійною угодою між вами і NeoSeo.</p>
<p>Погоджуючись на цю угоду або використовуючи програмне забезпечення, ви погоджуєтеся з усіма цими умовами.</p>
<p>Ця угода відноситься до програмного забезпечення NeoSeo, будь-яких шрифтів, піктограм, зображень або звукових файлів, що надаються у складі програмного забезпечення, а також до всіх оновлень, доповнень або служб NeoSeo для програмного забезпечення, якщо в їх відношенні не застосовуються інші умови. Це також стосується розроблених в NeoSeo додатків і доповнень для SEO-Магазину, які забезпечують розширення його функціональних можливостей.</p>
<p>До використання вами деяких функцій додатків можуть застосовуватися додаткові умови NeoSeo і третіх осіб. Для коректної роботи деяких додатків необхідні додаткові угоди з окремими умовами та політиками конфіденційності, наприклад з сервісами, які надають послуги смс-нотифікації.</p>
<p>Програмне забезпечення не продається, а надається за ліцензією.</p>
<p>NeoSeo зберігає за собою всі права (наприклад, права, передбачені законами про захист інтелектуальної власності), які не надаються явно в рамках цієї угоди. Наприклад, ця ліцензія не надає вам права:</p>
<li><span></span><span></span>окремо використовувати або віртуалізувати компоненти програмного забезпечення;</li>
<li>публікувати або копіювати (за винятком дозволеної резервної копії) програмне забезпечення, надавати програмне забезпечення у прокат, в оренду або в тимчасове користування;</li>
<li>передавати програмне забезпечення (за винятком випадків, передбачених цією угодою);</li>
<li>намагатися обійти технічні обмеження програмного продукту;</li>
<li>вивчати технологію, декомпілювати або деасемблувати програмне забезпечення, а також вживати відповідні спроби, крім тих що в мірі та у випадках, коли це (а) передбачено відповідним правом; (б) дозволено умовами ліцензії на використання компонентів з відкритим вихідним кодом, які можуть входити до складу цього програмного забезпечення; (c) необхідно для налагодження змін будь-яких бібліотек, що ліцензуються по малій стандартній громадській ліцензії GNU, які входять до складу програмного забезпечення та пов`язані з ним;</li>
<p>Ви маєте право використовувати дане програмне забезпечення, тільки якщо у вас є відповідна ліцензія і програмне забезпечення було належним чином активовано з використанням справжнього ключа продукту або в інший дозволений спосіб.</p>
<p>У вартість ліцензії SEO-Магазину не включені послуги установки, настройки і тим більше його стилізації, також як і інші платні / безкоштовні доповнення до нього. Дані послуги є додатковими, вартість залежить від кількості необхідних для реалізації годин, детальніше тут: <a href="https://neoseo.com.ua/vse-chto-nujno-znat-klienty" target="_blank" class="external">https://neoseo.com.ua/vse-chto-nujno-znat-klienty</a></p>
<p>З повною версією документа можна ознайомитися тут:</p>
<p><a href="https://neoseo.com.ua/usloviya-licenzionnogo-soglasheniya" target="_blank" class="external">https://neoseo.com.ua/usloviya-licenzionnogo-soglasheniya</a>
</p>';
$_['mail_support']='<h2>Умови безкоштовної та платної інформаційної та технічної підтримки в <a class="external" href="https://neoseo.com.ua/" target="_blank">NeoSeo</a>.</h2>

<p>Оскільки ми впевнені у тому, що будь-яка Якісна робота повинна бути оплачуваною, всі консультаційні відповіді, що вимагають попередньої підготовки - платні, в т.ч. і ситуації у стилі: &quot;подивіться, а чому тут ВАШ модуль не працює?&quot;</p>

<p>Якщо відповідь на Ваше питання у нас вже готова, Ви її отримаєте безкоштовно. Але якщо для відповіді потрібно витратити час, щоб розібратися в питанні, вивчити файли, знайти помилку і проаналізувати, перш ніж отримати відповідь, попросимо здійснити оплату.</p>

<p>Ми допомагаємо безкоштовно <strong>по встановленні</strong> і <strong>усуненні помилок при встановленні</strong> куплених у нас модулів у порядку загальної черги.</p>

<p>За будь-якими питаннями звертайтесь на www.opencartmasters.com.</p>

<p>З повною версією ліцензійної угоди ознайомтесь тут: <a class="external" href="https://neoseo.com.ua/usloviya-licenzionnogo-soglasheniya" target="_blank">https://neoseo.com.ua/usloviya-licenzionnogo-soglasheniya</a></p>

<p><strong>Акція: напишіть відгук - отримайте модуль в подарунок :)</strong></p>

<p>Шановні Клієнти веб-студії NeoSeo,</p>

<p>скажіть, що може бути краще для розвитку компанії, ніж публічні відгуки? Це чудовий спосіб почути свого Клієнта і зробити свої продукти та сервіс ще краще.</p>

<p>Будь ласка, залиште відгук про співпрацю з нашою веб-студією або про роботу наших програмних рішень (додатків) на наших сторінках в Facebook, Google, Яндекс і на OpenCartForum.com.</p>

<p>Пишіть як є, нам важливо почути чесну та об\'єктивну оцінку, а в знак подяки за витрачений на написання відгуків час, ми підготували приємний бонус. Детальніше про умови акції тут: <a href="https://neoseo.com.ua/akciya-modul-v-podarok " target="_blank">https://neoseo.com.ua/akciya-modul-v-podarok </a></p>

<p>Ще раз, велике спасибі за те, що ви з нами!</p>

<p>Команда NeoSeo</p>';
