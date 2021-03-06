<?php

class m140623_131515_addAreas extends CDbMigration
{
    public function up()
    {
        $this->createTable('area', array(
            'id'   => 'INT(4) UNSIGNED NOT NULL AUTO_INCREMENT',
            'name' => 'VARCHAR(50)',
            'PRIMARY KEY (id)'
        ), 'ENGINE=InnoDB');

        $area = array(
            'Адыгея Респ',
            'Башкортостан Респ',
            'Бурятия Респ',
            'Алтай Респ',
            'Дагестан Респ',
            'Ингушетия Респ',
            'Кабардино-Балкарская Респ',
            'Калмыкия Респ',
            'Карачаево-Черкесская Респ',
            'Карелия Респ',
            'Коми Респ',
            'Марий Эл Респ',
            'Мордовия Респ',
            'Саха (Якутия) Респ',
            'Северная Осетия - Алания Респ',
            'Татарстан Респ',
            'Тыва Респ',
            'Удмуртская Респ',
            'Хакасия Респ',
            'Чеченская Респ',
            'Чувашская Респ',
            'Алтайский край',
            'Краснодарский край',
            'Красноярский край',
            'Приморский край',
            'Ставропольский край',
            'Хабаровский край',
            'Амурская обл',
            'Архангельская обл',
            'Астраханская обл',
            'Белгородская обл',
            'Брянская обл',
            'Владимирская обл',
            'Волгоградская обл',
            'Вологодская обл',
            'Воронежская обл',
            'Ивановская обл',
            'Иркутская обл',
            'Калининградская обл',
            'Калужская обл',
            'Камчатский край',
            'Кемеровская обл',
            'Кировская обл',
            'Костромская обл',
            'Курганская обл',
            'Курская обл',
            'Ленинградская обл',
            'Липецкая обл',
            'Магаданская обл',
            'Московская обл',
            'Мурманская обл',
            'Нижегородская обл',
            'Новгородская обл',
            'Новосибирская обл',
            'Омская обл',
            'Оренбургская обл',
            'Орловская обл',
            'Пензенская обл',
            'Пермский край',
            'Псковская обл',
            'Ростовская обл',
            'Рязанская обл',
            'Самарская обл',
            'Саратовская обл',
            'Сахалинская обл',
            'Свердловская обл',
            'Смоленская обл',
            'Тамбовская обл',
            'Тверская обл',
            'Томская обл',
            'Тульская обл',
            'Тюменская обл',
            'Ульяновская обл',
            'Челябинская обл',
            'Забайкальский край',
            'Ярославская обл',
            'Москва г',
            'Санкт-Петербург г',
            'Еврейская АО',
            'Ненецкий АО',
            'Ханты-Мансийский АО',
            'Чукотский АО',
            'Ямало-Ненецкий АО',
            'Крым Респ',
            'Севастополь г'
        );

        foreach ($area as $a) {
            $this->insert('area', array('name' => $a));
        }
    }

    public function down()
    {

    }
}