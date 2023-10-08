<?php

namespace App\Containers\Achievement\Database\Seeders;

use App\Containers\Achievement\Models\Achievement;
use Illuminate\Database\Seeder;

class ExampleOverwatch2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Achievement::query()->upsert([
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/9fc763c0064f919df580defc82287978b9c90279.jpg",
                'title' => "Смотри, но не трогай",
                'target' => "Обороняя груз, не подпускайте к нему врага в течение 1 минуты в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/7c8bd8d867af79218aaf3d35c50c3ba8f6074fff.jpg",
                'title' => "Без шансов!",
                'target' => "Выиграйте быстрый или соревновательный матч в режиме контроля, не позволив врагам захватить объект.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/fabb5f3cadf45380f1c35273b228526b03b17b33.jpg",
                'title' => "Испытанный герой",
                'target' => "Выполните 50 испытаний.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/2825fd2ad873989abff0477b1de0cb8b48323e5b.jpg",
                'title' => "10-й уровень",
                'target' => "Заработайте 10 уровней боевого пропуска.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/a9f934c4e05c68b62778f58a4853ae111b349cda.jpg",
                'title' => "Френдзона",
                'target' => "Сыграйте быстрый или соревновательный матч в группе с как минимум одним своим другом.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/8168ce31dbb2ce91909acae778cf7854ed2ba990.jpg",
                'title' => "Мировое турне",
                'target' => "Выиграйте быстрые или соревновательные матчи на 12 разных полях боя.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/4cbf411467679bb1b22bc94dd3ea8af56c1cacf1.jpg",
                'title' => "Блэк-джек",
                'target' => "Получите 21 похвалу.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/35783b57fb06b87eeb074a61b0a2696781c90507.jpg",
                'title' => "25-й уровень",
                'target' => "Заработайте 25 уровней боевого пропуска.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/7cf4472b646fb057b472e1155ce5b358667d53f8.jpg",
                'title' => "Групповая терапия",
                'target' => "За одну жизнь Ангела восполните по 150 ед. здоровья 4 игрокам в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/3eea8c750b2fb81b17db125d4af502e04840bcb9.jpg",
                'title' => "Смерть во плоти",
                'target' => "Выполните серию из 20 убийств в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/304c0a6377bbbdd3f1be47375ea07b5d3c316a8c.jpg",
                'title' => "50-й уровень",
                'target' => "Заработайте 50 уровней боевого пропуска.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/1c3d69d0005c6a4dd896eececdb918c887d12222.jpg",
                'title' => "Человек-оркестр",
                'target' => "Поразите противника одновременно 3 лучами Симметры в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/188bf58babc2d7737fd65321fc4589397e327e63.jpg",
                'title' => "Ты на крючке!",
                'target' => "Прервите суперспособность врага «Цепным крюком» Турбосвина в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/dd4cf67b09ae63c2eaf27dce95b0b334f65ebc1e.jpg",
                'title' => "Элементарная тригонометрия",
                'target' => "За одну жизнь потратьте всю энергию обеих биотических сфер Мойры в быстром или соревновательном
                матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/58184e72763522f2d4a6aa89077e0e87846afe31.jpg",
                'title' => "Тихий час",
                'target' => "Прервите суперспособность врага «Транквилизатором» Аны в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/91961e2829d751cf418525ed015a71feb56c5adb.jpg",
                'title' => "Сверхзвук",
                'target' => "Заблокируйте 900 ед. урона одним «Звуковым барьером» Лусио в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/3de11bb73e3bcfb1339ee5f6241eeb64d32a35e0.jpg",
                'title' => "Кровь тигра",
                'target' => "Победите в 100 быстрых или соревновательных матчах.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/d01461df1f0775c80320c078d29cdf9fddaa4395.jpg",
                'title' => "Сила притяжения",
                'target' => "Захватите одним «Гравитонным импульсом» Зари 4 игроков в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/f9499d284115d5b4576f65769b01b63b7a0ee7e3.jpg",
                'title' => "Сохранение энергии",
                'target' => "Получите 350 ед. щитов за один «Кинетический захват» Сигмы в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/c4a594cde1e860509477092d68ca64514ab69582.jpg",
                'title' => "Трипл-дабл",
                'target' => "Убейте по 2 противника в каждом режиме Бастиона за одну жизнь в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/81148ebcb8a178e9ac2b010b8d8bc57208939986.jpg",
                'title' => "Не-а, без шансов",
                'target' => "Предотвратите 1250 ед. урона одной «Защитной матрицей» D.Va в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/a1fb6187d064de0f396ac075ea90f8df9cd9a3a1.jpg",
                'title' => "Зачистка местности",
                'target' => "С помощью «Взрывной волны» Фарры заставьте врага разбиться в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/0665f3eedc4895de3e1b52a9f906e9eae00154c6.jpg",
                'title' => "Элитный кортеж",
                'target' => "Сдвиньте груз на 100 метров, ни разу не отойдя от него, в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/8be3d4c545c0b8b9536fcbda05c920b173be0fc0.jpg",
                'title' => "Прошу прощения",
                'target' => "Убейте противника ударом щита Бригитты в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/d54bd3e2f71cd5980ff6621d94e3c46e30d65bec.jpg",
                'title' => "Ледяной прием",
                'target' => "Заблокируйте 1000 ед. урона одной «Ледяной стеной» Мэй в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/1ce793bf521a11e917df4f70378085a774cb5735.jpg",
                'title' => "Как много целей",
                'target' => "Убейте 4 врагов одним «Тактическим визором» Солдата-76 в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/54444d0494713d588aa517f674009c5c3be57c02.jpg",
                'title' => "Умри, умри, умри... Умри!",
                'target' => "Убейте 4 противников при помощи одного «Цветка смерти» Жнеца в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/46ce5ea2b38e5846c284c0ca4bcdebd6903bd804.jpg",
                'title' => "Путь закрыт",
                'target' => "Уничтожьте 3 телепорта Симметры за один быстрый или соревновательный матч.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/eff274497ed40fad05127995f5dbd241fd6f1fbe.jpg",
                'title' => "Не отступать и не сдаваться",
                'target' => "Выиграйте матч в обороне в режиме захвата, не потеряв первый объект.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/9c8112dcc0306fdcb8104d24d14520a17aa6a695.jpg",
                'title' => "Переполняющая мощь",
                'target' => "60 секунд поддерживайте энергию пушки Зари выше 70% в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/f138ab4035259c7af33f08d605e0d21a231437b1.jpg",
                'title' => "Стимуляция",
                'target' => "Совершите 4 содействия или убийства за один «Стимулятор» в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/69227efd37eaf1952de42a8491a09358e018c52b.jpg",
                'title' => "Комбо-меню",
                'target' => "За одну жизнь захватите оба объекта в режиме захвата.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/be5eddab1c35336eb3b715c50948fb73daa43d4c.jpg",
                'title' => "Управление гневом",
                'target' => "Нанесите урон 5 разным игрокам за 1 «Ярость зверя» Уинстона в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/bd92c23b858f21ccad1a6a803b8160c8c3177429.jpg",
                'title' => "Эксперт по выживанию",
                'target' => "Восполните аптечками 900 ед. здоровья за одну жизнь в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/362f86b0c553d2a7995caa46ef70694b12ae1958.jpg",
                'title' => "Острие копья",
                'target' => "Убейте противника, отбросив его «Энергетическим копьем» Орисы в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/083ce062c85907ca3af82e60b573ac26f66c0a30.jpg",
                'title' => "Я ваш щит",
                'target' => "За одну жизнь заблокируйте 7500 ед. урона барьером Райнхардта в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/af9a138771b0a17233480f9094365e3b20d2b21a.jpg",
                'title' => "Ёкай",
                'target' => "За одну жизнь Кирико восполните 1500 ед. здоровья и совершите 5 критических попаданий в быстром или
                соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/2f088bfaa9209cc1e5418d3643a6e8333828435d.jpg",
                'title' => "Вернуть все",
                'target' => "За одну жизнь восполните 400 ед. здоровья «Возвратом» Трейсер в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/3dc9e3c30785b38a138e9105c17140e29950586b.jpg",
                'title' => "Удар милосердия",
                'target' => "Играя за Королеву Стервятников, притяните и убейте противника «Зазубренным клинком» и «Карнажем» в
                быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/789199f2aba8a54f26a772a18f5db4891b5b2532.jpg",
                'title' => "И разверзлась земля",
                'target' => "Убейте 3 противников с помощью одной «Встряски земли» Орисы в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/990716ff2c5b56c9faf3c377d03768793d0fb5b7.jpg",
                'title' => "Замрите!",
                'target' => "Играя Мэй, заморозьте сразу 4 противников в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/269da12fe10b4aba904a70f392e55d957c9e789e.jpg",
                'title' => "С корабля на бал",
                'target' => "Отбросьте противника «Фугасной миной» Крысавчика в капкан в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/e952d59b4c9ef7e33361e18addfcaf01bb0c4a46.jpg",
                'title' => "Жесткая посадка",
                'target' => "Убейте находящегося в воздухе врага «Хлестким ударом» Бригитты в быстром или соревновательном
                матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/6c4212445f143595a98751aa11f7949d23940a92.jpg",
                'title' => "Рокет-рольщик",
                'target' => "Добейте 2 противников одним «Ракетным ударом» Солдата-76 в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/a783024b7e8c30e38ea39f576109f53c6d36d990.jpg",
                'title' => "Смерть с небес",
                'target' => "Играя Фаррой, убейте 4 противников, не коснувшись земли в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/137e1a0b7bc218c562e0be98621681594c15edd9.jpg",
                'title' => "Импульсивная натура",
                'target' => "Играя Сомброй, взломайте одновременно 5 противников в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/c125dcd02692dffa92ca3431149afc1a0a790711.jpg",
                'title' => "Игра окончена",
                'target' => "Убейте 4 противников одним «Самоуничтожением» D.Va в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/3206302732e63a40b22dc6a4ddee897747ebcbae.jpg",
                'title' => "Сфера примет вас",
                'target' => "Восполните 1250 ед. здоровья одной «Трансцендентностью» в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/b2b6e1ac5590e65ded91bff6dabf592b1a5b0b3a.jpg",
                'title' => "Я на дефе!",
                'target' => "Верните флаг своей команды в режиме «Захват флага».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/ead16d1d5b5abca0f78722624b5798dcc917db80.jpg",
                'title' => "Поймал!",
                'target' => "Убейте 2 противников с помощью 1 «Магнитной гранаты» Кэссиди в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/6a7d1a2fd4519cf541eed1992fa09103f2101c28.jpg",
                'title' => "Все средства хороши",
                'target' => "Убейте 3 противников за одно применение «Аннигиляции», играя за Раматтру в быстром или соревновательном
                матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/fb1d3a1e55998a27a9ecca69d65be1c59ff3593d.jpg",
                'title' => "Горькая, горькая смерть",
                'target' => "За один быстрый или соревновательный матч убейте 4 врагов «Ядовитой миной» Роковой Вдовы.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/d5c20810d8e88daef71a45dca5a3f9e344e9e19b.jpg",
                'title' => "Непревзойденная стойкость",
                'target' => "Выживите, заблокировав 300 или более ед. урона за одну активацию формы Немезиды, в быстром или
                соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/6a8db742e7d03bc73f9e2fe48846a96a59e022d7.jpg",
                'title' => "Посылка не доставлена",
                'target' => "Убейте несущего флаг противника в режиме «Захват флага».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/fbc67edc5bfa666c9c5c1b61f73afed3db2391dc.jpg",
                'title' => "Короткий фитиль",
                'target' => "Убейте врага «Динамитом» Эш, подстрелив шашку с 30+ метров в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/2001b369afef0e8597f8f6c50035d3d0d8624bc1.jpg",
                'title' => "Страйк",
                'target' => "Играя Тараном, врежьтесь в 4 врагов в течение 2 сек. в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/d7ee0d7ade08b11e6c4b0faae316ce0ce55e2491.jpg",
                'title' => "Хакнем планету",
                'target' => "Играя Сомброй, за одну жизнь взломайте 15 противников в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/315d01307294681379273371f8559de730b247ab.jpg",
                'title' => "Руби-кромсай",
                'target' => "Убейте 4 противников одним «Клинком дракона» Гэндзи в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/1cd589dfa5c49246ef65102f294d94d1726e8f42.jpg",
                'title' => "Броня крепка, и танки наши быстры!",
                'target' => "Убейте 3 противников, не выходя из «Режима артиллерии» Бастиона, в быстром или соревновательном
                матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/701ee8b63f8f90051d8e5bb1c331c7684d7cdbbf.jpg",
                'title' => "Полная комплектация",
                'target' => "Соберите 50 трофеев для одного героя.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/0bd614ac6906f2a229b8f3724867b730363f9b3f.jpg",
                'title' => "Большой успех",
                'target' => "Играя Симметрой, обеспечьте 15 телепортаций за один быстрый или соревновательный матч.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/cb3bc5b3ab8437e25961d0d5b0c6226570170257.jpg",
                'title' => "Убийственное спокойствие",
                'target' => "В быстром или соревновательном матче в полете убейте врага снайперским выстрелом Роковой Вдовы в
                голову.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/ecd343c28b51b4d5f281c903c01a93e1f7b792b7.jpg",
                'title' => "Флагоносец",
                'target' => "Выиграйте матч в режиме «Захват флага» со счетом 3:0.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/a4addb91295b6e990df8b1884175a1194103b7bc.jpg",
                'title' => "Антипод",
                'target' => "Поразите «Коалесценцией» Мойры одновременно 6 целей в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/50de07ad331f76515c55e7782267b2f73d80212a.jpg",
                'title' => "В мести отказано",
                'target' => "Пройдите потасовку «Месть Крысенштейна» на сложности «Ветеран».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/c602f347ae41818a5b92fd1106085512bf02295b.jpg",
                'title' => "Хватит. В себя. Стрелять.",
                'target' => "Убейте 2 противников с помощью одного «Отражения атак» Гэндзи в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/6235f439ce262a6034eab837a2adeb88d028c855.jpg",
                'title' => "Даешь броню!",
                'target' => "За одну жизнь поглотите 500 ед. урона «Перегрузкой» Торбьорна в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/b09a7677311e21dddf6941d8edd84bfec3147478.jpg",
                'title' => "Захвачено",
                'target' => "Захватите флаг противника в режиме «Захват флага».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/f3783290e78375e1b33dd2b0f6cb630f7cb28f72.jpg",
                'title' => "Дракон вышел на охоту",
                'target' => "Убейте 4 противников одним «Ударом дракона» Хандзо в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/827f40f54422e7f691628db0afa4cfe6886bfbd2.jpg",
                'title' => "Адаптация",
                'target' => "За одну жизнь поглотите 1250 ед. урона адаптивным щитом Тарана в быстром или соревновательном
                матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/02527ac907d44f3c176f321efbccbaf092953442.jpg",
                'title' => "Вайп, расходимся",
                'target' => "Убейте 4 противников за один «Перегрев» Торбьорна в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/07d1f0fa6ca22d6a06bd0cea268c4d7bf36a898c.jpg",
                'title' => "Беспредел на колесах",
                'target' => "Убейте 4 противников одной «Адской шиной» Крысавчика в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/07aa5a0f83de8ec1dfa456bab745e87b15d23dae.jpg",
                'title' => "Стрелять подано",
                'target' => "Играя Эш, добейте подброшенного в воздух Бобом врага в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/020e0136125269edc6044196134854f0967236ca.jpg",
                'title' => "Всем встать!",
                'target' => "Воскресите союзников Ангелом 5 раз за одну жизнь в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/831705716fbb59dc74ed0da1da8ecf92b253b8d5.jpg",
                'title' => "Буря, земля и огонь",
                'target' => "Оглушите врага и поразите его обеими способностями Райнхардта в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/a306c845072a60cb3928a59cfacd48fe98910061.jpg",
                'title' => "Думай желудком",
                'target' => "Играя йети, съешьте 4 куска мяса в потасовке «Охота на йети».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/49dca245b1c46b6b6c88c8d480bd95f0388ed628.jpg",
                'title' => "Шлепнулся и не побежал",
                'target' => "Играя охотницей, поймайте йети в ловушку в потасовке «Охота на йети».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/b39b8430da9efe1d70197933bf0f22e5e0af19b7.jpg",
                'title' => "Мощный тычок",
                'target' => "Ударьте о стену 3 цели усиленным «Реактивным ударом» в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/87c800a8861c3965d556145533fa46a163b826c6.jpg",
                'title' => "В надежных руках",
                'target' => "Играя в лусиобол, совершите 3 сейва подряд.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/d786485d87ef0265f0719e62810ce7c23c54c275.jpg",
                'title' => "Смела метелица",
                'target' => "Победите в операции «Метелица», не проиграв ни одного раунда.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/ec440b8f93f03993dcca6c66fcd3f94df5bdae78.jpg",
                'title' => "Мокрое место",
                'target' => "Поразите 3 противников одним «Ударом метеора» Кулака Смерти в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/74387d1e34a2420961c7cd333b9050cfefa4eb37.jpg",
                'title' => "Особая доставка",
                'target' => "Прицепите к врагам 4 «Импульсные бомбы» Трейсер за один быстрый или соревновательный матч.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/d9a7e76979cb8a54095983d2fb3e2b2aa8493e2a.jpg",
                'title' => "Хет-трик Лусио",
                'target' => "Играя в лусиобол, забейте гол, помогите его забить и совершите сейв за один матч.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/454da12d8e4ac111af2c610d3907bfc1c73afcd6.jpg",
                'title' => "Как ветром сдуло",
                'target' => "Одним «Турбосвинством» заставьте 2 врагов разбиться в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/6e1b0272ea3f30fe30d40fbd5d1f56979b071ced.jpg",
                'title' => "Очищение",
                'target' => "Снимите 5 негативных эффектов 1 «Талисманом защиты» Кирико в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/f55885b1780108d8d0b7e76370489b6e4f19f290.jpg",
                'title' => "Забрезжил рассвет",
                'target' => "Пройдите потасовку «Месть Крысенштейна» на сложности «Эксперт».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/eb7c953c8c7911c45fd0c2239077ea4e0dd45876.jpg",
                'title' => "Ровно в полдень",
                'target' => "Убей 4 противника с помощью одного «Меткого стрелка» Кэссиди в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/22d04a7f218d49f6758a7a6c99bdc0e1874ec60b.jpg",
                'title' => "Четверо смелых",
                'target' => "Пройдите потасовку «Месть Крысенштейна» 4 разными героями.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/8a17060bdca29a9e3d9930cf581e09f831b99a64.jpg",
                'title' => "Основы геометрии",
                'target' => "Убейте 3 противников одним «Шквалом» Хандзо в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/f52be19e83836ac215b47932e1e4241a482ea0e0.jpg",
                'title' => "Облучение",
                'target' => "Убейте 2 противников одним «Направленным лучом» Эхо в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/a40ea1dc9edee8d78dd4393ec1d9489ed1c40dfd.jpg",
                'title' => "Горизонт событий",
                'target' => "Убейте 3 врагов за один «Гравитационный колодец» Сигмы в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/a7079e45ac6bb8eba178970dadb7f8c20e8ed9fa.jpg",
                'title' => "Буйство",
                'target' => "Играя йети, убейте 3 противников в потасовке «Охота на йети».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/e422681c13843193d2f20cb769e2a911435f27f2.jpg",
                'title' => "В погоне за бурей",
                'target' => "Пройдите «Предчувствие бури» в режиме «Все герои» на сложности «Боец».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/c3e43e33694d929d068b418779730723af0e4714.jpg",
                'title' => "В тень",
                'target' => "Пройдите сюжетное «Возмездие» на сложности «Боец».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/28ec064e962eb4b3df242c063ecbb1b6aaf8f7b4.jpg",
                'title' => "Гол с лета",
                'target' => "Играя в лусиобол, забейте гол, находясь минимум в 4 метрах над площадкой.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/772bfc4e8040a320d15212e2ed8b32088e82f7a5.jpg",
                'title' => "Поймала!",
                'target' => "Убейте противника пойманным снежком в снежной схватке.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/2262d1b8d8f831eed7a3af090077b13052528eaf.jpg",
                'title' => "Сапер",
                'target' => "За одну жизнь разрушьте пушкой «Тесла» 10 турелей или ловушек в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/b23fe749eb19a083b64329492281bc89ce1b2cc2.jpg",
                'title' => "Щедрое древо",
                'target' => "Восполните 1200 ед. здоровья одним «Древом жизни» Ткача Жизни в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/71fd49aef60b8104fd1f8f98b73c5a3d8b8dcf42.jpg",
                'title' => "Шторм",
                'target' => "Пройдите сюжетное «Предчувствие бури» на сложности «Боец».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/9a8eaf3c19ad476f01d4a86014042e31fdc9a4ec.jpg",
                'title' => "Задание выполнено",
                'target' => "Пройдите сюжетный «Мятеж» на сложности «Боец».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/95b5e4d92efda2e30829c5c2540f3b7253fd6ece.jpg",
                'title' => "Верхом на буре",
                'target' => "Пройдите «Предчувствие бури» в режиме «Все герои» на сложности «Эксперт».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/92d180ec3f565be2cae15afb0e2e006464201644.jpg",
                'title' => "Адаптивность",
                'target' => "Примените 2 суперспособности других героев за одну жизнь Эхо в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/9ba038d38f3e9d4efd041f78dcb409e1c8c349a9.jpg",
                'title' => "Мстительный дух",
                'target' => "Пройдите испытание Крысенштейна «Мстительный дух».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/20dd7fec590dcde5030e73dd4d491bcdb6dd13c1.jpg",
                'title' => "Одинокое трио",
                'target' => "Пройдите испытание Крысенштейна «Одинокое трио».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/9e5ea817fe769d9067429ca17bb324a9ae5f6460.jpg",
                'title' => "Повторить трижды",
                'target' => "Убейте 3 противников в снежной схватке без смертей и перезарядок.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/ad8d381620461648999c3e02e1c1280966b66ec3.jpg",
                'title' => "Бери упреждение!",
                'target' => "Попадите в противника снежком с расстояния не менее 25 м во время операции «Метелица».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/192e4cf07de0b326066d69fca5ce4d34b8ecdd40.jpg",
                'title' => "Не так быстро!",
                'target' => "В режиме «Охота за головами» убейте игрока-цель, когда тот применяет суперспособность.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/6c2d7195129c423d1e2df10febb9cf16b3e95142.jpg",
                'title' => "Шестеро скитальцев",
                'target' => "Пройдите потасовку «Месть Крысенштейна» 6 разными героями.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/ab50d7bb24bbc4c55d52e3e3b34772f6e41e7abb.jpg",
                'title' => "Бешеный натиск",
                'target' => "Пройдите испытание Крысенштейна «Бешеный натиск».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/12d9ef6bf6a144c9290232ff8f1c2f85ef641de7.jpg",
                'title' => "Взрывоопасные зомники",
                'target' => "Пройдите испытание Крысенштейна «Взрывоопасные зомники».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/3fd2fb9a8f789c87a8b61986c7914fcdcf2aa476.jpg",
                'title' => "Ни царапины",
                'target' => "Пройдите потасовку «Месть Крысенштейна» на сложности «Ветеран», не дав врагам повредить ворота.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/662eece29adc370eee075fe685605a7fd609379a.jpg",
                'title' => "Таинственная подмена",
                'target' => "Пройдите испытание Крысенштейна «Таинственная подмена».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/b5381d3d90ab9130e796d04f7fa41d6fa2c199f7.jpg",
                'title' => "Кровавая луна",
                'target' => "Пройдите испытание «Кровавая луна» в заданиях «Архивов».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/9755766379ac682fbecd46036aadba4b3ca671a5.jpg",
                'title' => "Перегрев",
                'target' => "Пройдите испытание «Перегрев» в заданиях «Архивов».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/0077544a99a2cc4a9e516943ef4aa2a39d22c18c.jpg",
                'title' => "Это айс!",
                'target' => "Не промахнувшись ни разу, попадите в 4 противников снежками за один матч операции «Метелица».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/321a79abbe9081aad171a54b069c57130342fa6f.jpg",
                'title' => "Быстрый дубль",
                'target' => "Забейте 2 гола за 5 секунд в матче по лусиоболу-ремикс.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/53cf35a43082497fa6c76d9ae23f6ee699f96e6d.jpg",
                'title' => "Плетение жизни",
                'target' => "Предотвратите 3 смерти с помощью «Хватки жизни» Ткача Жизни, не погибнув, в быстром или соревновательном
                матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/290a181f97afb3ca55fa1a3e89636c2ddadf6c90.jpg",
                'title' => "Ничто не пропадет даром",
                'target' => "Совершите 3 одиночных убийства с одним боекомплектом Жнеца в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/e5018c1b864d5cbe1d2b975a2e46e9220e593d57.jpg",
                'title' => "Массовый диссонанс",
                'target' => "Со «Сферой диссонанса» примите участие в 4 убийствах за 6 сек. в быстром или соревновательном
                матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/86e8dc36e7d413e64dc2b09e0ffc54af701f7647.jpg",
                'title' => "Стражи рассвета",
                'target' => "Переживите 12 бонусных волн нападения в потасовке «Бесконечная месть».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/95cd4ace8f26c7e2d625b82ade051297a7df9719.jpg",
                'title' => "Ближний бой",
                'target' => "Пройдите испытание «Ближний бой» в заданиях «Архивов».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/303b0eecfd254d8f148c987df0b2a10ad8b669fb.jpg",
                'title' => "Не спи, замерзнешь!",
                'target' => "Разморозьте игрока, который перед этим разморозил вас в том же раунде «Ледяной ликвидации».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/0e63c1f371876c2ed1aac4a26221f62306246eda.jpg",
                'title' => "Затворенный ход",
                'target' => "Пройдите потасовку «Месть Крысенштейна» на сложности «Легенда».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/ea681c8fc2b6630e3c340aecdb76ab76eeb72aef.jpg",
                'title' => "Хирургическая точность",
                'target' => "Пройдите испытание «Хирургическая точность» в заданиях «Архивов».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/0181a6c1df84034bcbe21b62a43e1195ea439a7d.jpg",
                'title' => "Пара снежинок",
                'target' => "Убейте 2 противников одним «Шквалом» во время операции «Метелица».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/a6302ce6648115e39b97185c8111704d6a241a2d.jpg",
                'title' => "Быстрый стрелок",
                'target' => "Будучи целью охоты, убейте 3 противников в режиме «Охота за головами», ни разу не погибнув.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/e5238d0bd1d81edb0b3e680087f1060f30e69197.jpg",
                'title' => "Горячая рука",
                'target' => "Выиграйте раунд, оставшись единственным выжившим в операции «Метелица».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/13557caae0f1e282af25926a00165f1f0dfa63e2.jpg",
                'title' => "Не трогай пол!",
                'target' => "За одну жизнь Лусио добейте 3 врагов, пока скользите по стене в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/cfd8b90b7df60d7fdadff614b3d544e457e911bc.jpg",
                'title' => "Держитесь рядом",
                'target' => "Предотвратите 4 смерти одним «Полем бессмертия» Батиста в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/523cc47d59083b5b4db109dcf01803788ad477eb.jpg",
                'title' => "Хрупкие разрушители",
                'target' => "Пройдите испытание «Хрупкие разрушители» в заданиях «Архивов».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/f97702797f9b83992ca741b67b6fd8fc98205611.jpg",
                'title' => "Прорыв",
                'target' => "Пробейте «Ледяную стену» противника в снежной схватке, а затем убейте его.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/34b114a7c4827d796d2a1c37ee2933c03de147c8.jpg",
                'title' => "Тихая ночь",
                'target' => "Пройдите сюжетное «Возмездие» на сложности «Эксперт».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/e72cb7f60e50c22cf5f8b570cca1b38fa826985f.jpg",
                'title' => "Инцидент в Венеции",
                'target' => "Пройдите сюжетное «Возмездие» за каждого из четырех героев.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/49391ccdceea6565ea1f8bb0cdabc390aa04f1af.jpg",
                'title' => "Не кантовать",
                'target' => "Доставьте груз с запасом прочности более 80% в сюжетном «Мятеже» на сложности «Боец».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/899347b701ef5fe2f05c184adfa9b31b6fe7bc72.jpg",
                'title' => "Запись удалена",
                'target' => "Пройдите потасовку «Возмездие» в режиме «Все герои» восемью разными героями.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/e6c0d8146289deb3d5fb76e0ae0723f44e1d973e.jpg",
                'title' => "Ударный отряд",
                'target' => "Пройдите сюжетный «Мятеж» за каждого из четырех героев.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/a3f9eb8edc6487573e19997634dff6be079edf66.jpg",
                'title' => "Гроза",
                'target' => "Пройдите испытание «Гроза» в заданиях «Архивов».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/01fcc9dad89d745e5bc3cbd18f909e74be1fa5e9.jpg",
                'title' => "Перемена слагаемых",
                'target' => "Пройдите потасовку «Мятеж» в режиме «Все герои» восемью разными героями.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/77aa130eb146a6d2fe8cd0699e83806365835c1e.jpg",
                'title' => "Закаленные защитники",
                'target' => "Переживите 4 бонусные волны нападения в потасовке «Бесконечная месть» на сложности «Боец».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/293f5e3ea0d6d91a22192e9546e96157be340600.jpg",
                'title' => "Электросюрприз",
                'target' => "Пройдите испытание Крысенштейна «Электросюрприз».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/054d208959451c0ee57c991fa38c68ee5a8a7338.jpg",
                'title' => "Живительная эмпатия",
                'target' => "Пройдите испытание «Живительная эмпатия» в заданиях «Архивов».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/17f2453a7e8b5201ab786e2834cc532ab3fde4e7.jpg",
                'title' => "Непробиваемые барьеры",
                'target' => "Пройдите испытание «Непробиваемые барьеры» в заданиях «Архивов».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/20b375ffef975b4fefba48f2533a5dcb452177c8.jpg",
                'title' => "Ярость бури",
                'target' => "Пройдите испытание «Ярость бури» в заданиях «Архивов».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/2ab1bf6098e165cf002fa4d06eaba84a48e42a93.jpg",
                'title' => "Вот засада!",
                'target' => "В ходе одного матча операции «Метелица» попадите в 3 противников снежками, пока они собирают снег.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/268c2a4d674f419e1649bd88f2ad04c4326deda1.jpg",
                'title' => "За дело",
                'target' => "Убейте 4 противников с помощью одного «Разгона» Соджорн в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/47b9fe7c429f3343c6c410aae705874b19b20259.jpg",
                'title' => "Вихрь",
                'target' => "Пройдите сюжетное «Предчувствие бури» на сложности «Эксперт».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/5fb29a46db312bc670fed8ab6d0b3ddc4c18ef33.jpg",
                'title' => "Вольные стрелки",
                'target' => "Пройдите «Предчувствие бури» в режиме «Все герои» восемью разными героями.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/31cf8b827ebffa6c606b128122fed2f01d741c2d.jpg",
                'title' => "Штормовое предупреждение",
                'target' => "Пройдите сюжетное «Предчувствие бури» за каждого из четырех героев.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/9aa714783e0d1f433ebbb3c24b2125fde6a4a9a4.jpg",
                'title' => "Представление к награде",
                'target' => "Пройдите сюжетный «Мятеж» на сложности «Эксперт».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/4f1516a78c07b5be71cbcba1edd6380c7f11ef5b.jpg",
                'title' => "Их было шестеро",
                'target' => "Пройдите базовый этап потасовки «Бесконечная месть» шестью разными героями.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/64d1bf570b43c9e65f433a21df36595b6ce0ddfe.jpg",
                'title' => "Адреналиновая зависимость",
                'target' => "Сделайте так, чтобы на цели одновременно действовали 7 ран, в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/b924fc39113bd66ef359eb07c57b6bca9075117f.jpg",
                'title' => "Безжалостная стужа",
                'target' => "Прервите суперспособность врага заморозкой в «Ледяной ликвидации».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/a7828f2279554ee2e90948d4386a576342947e82.jpg",
                'title' => "В пути",
                'target' => "Убейте цель мощным выстрелом рельсотрона в голову в подкате в быстром или соревновательном матче.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/0d27a8d732a38f62853a1d5b036763804a7517f3.jpg",
                'title' => "Выжившие",
                'target' => "Переживите 4 бонусные волны нападения в потасовке «Бесконечная месть» на сложности «Эксперт».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/3231f1ea99b999f7de7eb9ddb6fff4ece7de1534.jpg",
                'title' => "Неприступный оплот",
                'target' => "Пройдите базовый этап «Бесконечной мести» на сложности «Боец», не дав врагам повредить ворота.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/f399dba8e2d6189e7fe9a6d416c042238297a61f.jpg",
                'title' => "Неистовая защита",
                'target' => "Выполните 15 сейвов в матче по лусиоболу-ремикс.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/b1a9830a87e98ae94ec774cc284f3c5fb170967c.jpg",
                'title' => "Как снег на голову",
                'target' => "Прервите 3 попытки врага разморозить союзников в «Ледяной ликвидации».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/deba0349b8b7e1c2ab31e4b8ffab0afe01a7ee77.jpg",
                'title' => "Расплата",
                'target' => "Убейте цель охоты 8 раз за один матч в режиме «Охота за головами».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/09e4e3f96425eca48f337b06ffb7a0ef444499e8.jpg",
                'title' => "Я буду все отрицать",
                'target' => "Пройдите сюжетное «Возмездие» на сложности «Легенда».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/04a5841f47d7f9869a6146c778f496459f931d7f.jpg",
                'title' => "Выдающиеся заслуги",
                'target' => "Пройдите сюжетный «Мятеж» на сложности «Легенда».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/f8924fdd7651a6080ee3b2476fe2f75107f89bf3.jpg",
                'title' => "Чистая работа",
                'target' => "Пройдите сюжетное «Возмездие» на сложности «Эксперт» без тяжелых ранений в команде.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/026e947cb4b185ec20479ed1cd84a472cee11888.jpg",
                'title' => "Ураган",
                'target' => "Пройдите сюжетное «Предчувствие бури» на сложности «Легенда».",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/b1666e95145264539bc885f8b34a7288c0e32b08.jpg",
                'title' => "Око бури",
                'target' => "Пройдите «Предчувствие бури» в режиме «Все герои» на сложности «Легенда» без тяжелых ранений.",
            ],
            [
                'icon_url' => "https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/apps/2357570/d77d3f6852a9ac851acd59d241649b4b8f386502.jpg",
                'title' => "Окно возможности",
                'target' => "За одну жизнь Батиста обеспечьте 2000 ед. урона и исцеления в быстром или соревновательном матче.",
            ],
        ], 'title');
    }
}
