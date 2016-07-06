<?php

return [
    'plugin' => [
        'name' => 'Пользователи',
        'description' => 'Фронтенд управление пользователями.',
        'tab' => 'Пользователи',
        'access_users' => 'Управление пользователями',
        'access_groups' => 'Управление группами пользователей',
        'access_settings' => 'Управление настройками пользователей'
    ],
    'users' => [
        'menu_label' => 'Пользователи',
        'all_users' => 'Все пользователи',
        'new_user' => 'Новый пользователь',
        'list_title' => 'Управление пользователями',
        'activating' => 'Активация...',
        'trashed_hint_title' => 'Пользователь деактивировал свой аккаунт',
        'trashed_hint_desc' => 'Этот пользователь деактивировал свой аккаунт. Он может реактивировать свой аккаунт в любое время."',
        'activate_warning_title' => 'Пользователь не активирован!',
        'activate_warning_desc' => 'Этот пользователь не активирован и не сможет войти.',
        'activate_confirm' => 'Вы действительно хотите активировать данного пользователя?',
        'active_manually' => 'Активировать этого пользователя вручную',
        'delete_confirm' => 'Вы действительно хотите удалить этого пользователя?',
        'activated_success' => 'Пользователь был успешно активирован!',
        'return_to_list' => 'Вернуться к списку пользователей',
        'delete_selected_empty' => 'Нет выбранных пользователей для удаления.',
        'delete_selected_confirm' => 'Удалить выбранных пользователей?',
        'delete_selected_success' => 'Выбранные пользователи успешно удалены.',
        'deactivate_selected' => 'Деактивировать выбранных',
        'deactivate_selected_confirm' => 'Деактивировать выбранных пользователей?',
        'deactivate_selected_empty' => 'Не выбраны пользователи для деактивации.',
        'deactivate_selected_success' => 'Выбранные пользователи успешно деактивированны.',
        'restore_selected' => 'Восстановить выбранных',
        'restore_selected_confirm' => 'Востановить вбранных пользователей?',
        'restore_selected_empty' => 'Нет выбранных пользователей для восстановления.',
        'restore_selected_success' => 'Восстановление выбранных пользователей.',
        'ban_selected' => 'Забанить выбранных',
        'ban_selected_confirm' => 'Забанить выбранных пользователей?',
        'ban_selected_empty' => 'Нет выбранных пользователей для добавления в бан.',
        'ban_selected_success' => 'Выбранные пользователи успешно забанены.',
        'unban_selected' => 'Разбанить выбранных',
        'unban_selected_confirm' => 'Разбанить выбранных пользователей?',
        'unban_selected_empty' => 'Нет выбранных пользователей для отмены бана.',
        'unban_selected_success' => 'Выбранные пользователи упешно разбаненны.',
    ],
    'settings' => [
        'users' => 'Пользователи',
        'menu_label' => 'Настройки пользователя',
        'menu_description' => 'Управления параметрами пользователя.',
        'activation_tab' => 'Активация',
        'signin_tab' => 'Авторизация',
        'registration_tab' => 'Регистрация',
        'notifications_tab' => 'Оповещения',
        'allow_registration' => 'Разрешить регистрацию',
        'allow_registration_comment' => 'Если эта опция выключена, только администраторы смогут регистрировать пользователей.',
        'activate_mode' => 'Активация',
        'activate_mode_comment' => 'Активация пользователя.',
        'activate_mode_auto' => 'Автоматическая',
        'activate_mode_auto_comment' => 'Автоматическая активация при регистрации.',
        'activate_mode_user' => 'Стандартная',
        'activate_mode_user_comment' => 'Активация при помощи электронной почты.',
        'activate_mode_admin' => 'Ручная',
        'activate_mode_admin_comment' => 'Только администратор может активировать пользователя.',
        'welcome_template' => 'Шаблон приветствия',
        'welcome_template_comment' => 'Шаблон сообщения, отправляемого после активации.',
        'require_activation' => 'Обязательная активация аккаунта',
        'require_activation_comment' => 'Пользователи должны иметь активированный аккаунт для входа.',
        'use_throttle' => 'Отслеживание неудачных попыток авторизации',
        'use_throttle_comment' => 'При множественных неудачных попытках авторизации пользователь будет заморожен.',
        'login_attribute' => 'Логин',
        'login_attribute_comment' => 'Поле, используемое в качестве логина пользователя.',
        'no_mail_template' => 'Не отправлять уведомление',
        'hint_templates' => 'Вы можете настроить шаблоны почты, выбрав «Почта» → «Шаблоны почты» в меню настроек.',
        'rule' => 'Правила',
        'rule_comment' => 'Отобразит пользователю правила при регистрации, и будет требовать их принятия',
        'rule_text' => 'Текст правил'
    ],
    'user' => [
        'label' => 'Пользователь',
        'id' => 'ID',
        'username' => 'Имя пользователя',
        'name' => 'Имя / Название',
        'surname' => 'Фамилия',
        'email' => 'Почта',
        'created_at' => 'Дата регистрации',
        'reset_password' => 'Сброс пароля',
        'reset_password_comment' => 'Для сброса пользовательского пароля, введите здесь новый пароль.',
        'confirm_password' => 'Подтверждение пароля',
        'confirm_password_comment' => 'Введите пароль еще раз для подтверждения.',
        'groups' => 'Группы',
        'empty_groups' => 'Нет групп, доступных пользователю.',
        'avatar' => 'Аватар',
        'details' => 'Информация',
        'account' => 'Аккаунт'
    ],
    'group' => [
        'label' => 'Группа',
        'id' => 'ID',
        'name' => 'Имя',
        'description_field' => 'Описание',
        'code' => 'Код',
        'code_comment' => 'Введите уникальный код для идентификации этой группы.',
        'created_at' => 'Дата создания',
        'users_count' => 'Пользователи'
    ],
    'groups' => [
        'menu_label' => 'Группы',
        'all_groups' => 'Группы пользователей',
        'new_group' => 'Новая группа',
        'delete_selected_confirm' => 'Вы действительно хотите удалить выбранные группы?',
        'list_title' => 'Управление группами',
        'delete_confirm' => 'Вы действительно хотите удалить эту группу?',
        'delete_selected_success' => 'Выбранные группы удалены.',
        'delete_selected_empty' => 'Не выбраны группы для удаления.',
        'return_to_list' => 'Вернутся к списку групп',
        'return_to_users' => 'Вернутся к списку пользователей',
        'create_title' => 'Создание группы',
        'update_title' => 'Редактирование группы',
        'preview_title' => 'Предпросмотр группы'
    ],
    'login' => [
        'attribute_email' => 'Почта',
        'attribute_username' => 'Имя пользователя',
        'did_not_match' => 'Пользователь был найден, однако "%s" был введен неверно, попробуйте еще раз...',
        'user_was_not_found_credentials' => 'Такого пользователя не существует',
        'attribute_is_required' => 'Необходимо указать "%s"',
        'password_attribute_is_required' => 'Необходимо указать пароль',
        'cannot_login_user_not_activated.' => 'Вы не можете войти в систему под пользователем "%s" поскольку он неактивен.',
        'login_attribute_was_not_provided.' => 'Атрибут "%s" не предусмотрен',
        'user_banned' => 'Пользователь [%s] забанен.',
        'user_suspended' => 'Пользователю [%s] временно отказано во входе, попробуйте повторить через некоторое время.',
    ],
    'account' => [
        'account' => 'Аккаунт',
        'account_desc' => 'Управление формой.',
        'redirect_to' => 'Перенаправление',
        'redirect_to_desc' => 'Страница для перенаправления после обновления, входа или регистрации.',
        'code_param' => 'Параметр кода',
        'code_param_desc' => 'Параметр, в котором передаётся код активации.',
        'invalid_user' => 'Пользователь с такими данным не найден.',
        'invalid_activation_code' => 'Неверный код активации.',
        'invalid_deactivation_pass' => 'Введенный Вами пароль некорректен.',
        'success_activation' => 'Успешная активация пользователя.',
        'success_deactivation' => 'Ваш аккаунт был деактивирован.',
        'success_saved' => 'Настройки успешно сохранены!',
        'login_first' => 'Вам необходимо войти под своими данными!',
        'already_active' => 'Ваш аккаунт ещё активирован!',
        'activation_email_sent' => 'Письмо с дальнейшими инструкциями по активации было выслано на указанный адрес электронной почты.',
        'registration_disabled' => 'Регистрация сейчас недоступна.',
        'sign_in' => 'Авторизация',
        'register' => 'Регистрация',
        'full_name' => 'Полное имя',
        'email' => 'Почта',
        'password' => 'Пароль',
        'login' => 'Логин',
        'new_password' => 'Новый пароль',
        'new_password_confirm' => 'Подтверждение пароля'
    ],
    'reset_password' => [
        'reset_password' => 'Сброс пароля',
        'reset_password_desc' => 'Форма восстановления пароля.',
        'code_param' => 'Параметр кода',
        'code_param_desc' => 'Параметр, в котором передаётся код сброса пароля.'
    ],
    'session' => [
        'session' => 'Сессия',
        'session_desc' => 'Добавление пользовательского сеанса к странице (доступ)',
        'security_title' => 'Доступ к странице',
        'security_desc' => 'Кто имеет право на доступ к этой странице.',
        'all' => 'Все',
        'users' => 'Пользователи',
        'guests' => 'Гости',
        'redirect_title' => 'Перенаправление',
        'redirect_desc' => 'Страница для перенаправления при отсутствии доступа.',
        'logout' => 'Вы успешно вышли из системы!'
    ],
    'components' => [
        'password' => 'Пароль',
        'sign_in' => 'Войти',
        'enter_your_name' => 'Введите ваше имя',
        'enter_your_email' => 'Введите свой email',
        'enter_your_password' => 'Введите свой пароль',
        'full_name' => 'Ваше имя',
        'register' => 'Регистрация',
        'i_agree_with' => 'Я согласен с',
        'rules' => 'правилами',
        'rule_required' => 'Необходимо принять правила',
        'email_is_unique' => 'Пользователь с такой почтой уже есть в системе',
        'login' => [
            'title' => 'Вход',
            'description' => 'Форма авторизации'
        ],
        'signup' => [
            'title' => 'Регистрация',
            'description' => 'Форма регистрации'
        ]
    ],
    'mail_templates' => [
        'activation' => 'Письмо активации отправляемое пользователям',
        'welcome'    => 'Приветственное сообщение отправляемое пользователю после успешной активации.',
        'restore'    => 'Инструкции по сбросу пароля для фронтенд пользователей.',
        'new_user'   => 'Письмо администратором, когда зарегестрировался новый пользователь',
        'reactivate' => 'Уведомление для деактивированных пользователей.',
    ]
];
