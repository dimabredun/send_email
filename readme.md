/*
Необходимо доработать класс рассылки Newsletter, что бы он отправлял письма
и пуш нотификации для юзеров из UserRepository.

    За отправку имейла мы считаем вывод в консоль строки: "Email {email} has been sent to user {name}"
    За отправку пуш нотификации: "Push notification has been sent to user {name} with device_id {device_id}"
    
    Так же необходимо реализовать функциональность для валидации имейлов/пушей:
    1) Нельзя отправлять письма юзерам с невалидными имейлами
    2) Нельзя отправлять пуши юзерам с невалидными device_id. Правила валидации можете придумать сами.
    3) Ничего не отправляем юзерам у которых нет имен
    4) На одно и то же мыло/device_id - можно отправить письмо/пуш только один раз
    
    Для обеспечения возможности масштабирования системы (добавление новых типов отправок и новых валидаторов), 
    можно добавлять и использовать новые классы и другие языковые конструкции php в любом количестве. 
    Реализация должна соответствовать принципам ООП
*/ 