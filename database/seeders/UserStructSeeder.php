<?php

namespace Database\Seeders;

use App\Models\UserStruct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserStructSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users_struct = [
            [
                "id" => 2,
                "parent_id" => 0,
                "position" => "Генеральный директор",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x58",
                "department_id" => 1,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10039,
                "parent_id" => 2,
                "position" => "ОсОО 'Кондитерский Дом Куликовский'",
                "status" => 0,
                "is_department" => 1,
                "hid" => "0x5BC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10011,
                "parent_id" => 2,
                "position" => "ТОО 'Куликовский Казахстан'",
                "status" => 0,
                "is_department" => 1,
                "hid" => "0x5D30",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41185,
                "parent_id" => 2,
                "position" => "ОсОО 'Семейные традиции'",
                "status" => 0,
                "is_department" => 1,
                "hid" => "0x5C60",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51320,
                "parent_id" => 41185,
                "position" => "Директор ОсОО 'Семейные традиции'",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5C6D",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 4,
                "parent_id" => 2,
                "position" => "Офис менеджер",
                "status" => -1,
                "is_department" => 0,
                "hid" => "0x5AC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51543,
                "parent_id" => 2,
                "position" => "ООО 'Куликовский Новосибирск'",
                "status" => -1,
                "is_department" => 1,
                "hid" => "0x5D10",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51687,
                "parent_id" => 2,
                "position" => "ТОО 'Куликовский Казахстан'",
                "status" => -1,
                "is_department" => 1,
                "hid" => "0x5D50",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52213,
                "parent_id" => 10039,
                "position" => "Административная дирекция",
                "status" => 0,
                "is_department" => 1,
                "hid" => "0x5BFE0000095D88",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10038,
                "parent_id" => 52213,
                "position" => "Административный директор",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AC0",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51252,
                "parent_id" => 10038,
                "position" => "Юридический Отдел",
                "status" => 0,
                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE0000099188",
                "department_id" => 0,
                "register_contacts" => 51252,
                "department_hr" => "NULL"
            ],
            [
                "id" => 3,
                "parent_id" => 10039,
                "position" => "Дирекция по организационному развитию",
                "status" => 0,
                "is_department" => 1,
                "hid" => "0x5BFE0000095CF8",
                "department_id" => 0,
                "register_contacts" => 3,
                "department_hr" => "NULL"
            ],
            [
                "id" => 5,
                "parent_id" => 10038,
                "position" => "Бизнес-администратор",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991A8",
                "department_id" => 1,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 6,
                "parent_id" => 5,
                "position" => "помощник",
                "status" => -1,
                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991ACA0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 7,
                "parent_id" => 5,
                "position" => "помощник",
                "status" => -1,
                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991ACE0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 8,
                "parent_id" => 5,
                "position" => "Регистратура",
                "status" => -1,
                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991AD10",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 9,
                "parent_id" => 10011,
                "position" => "Заместитель Генерального директора",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3A60",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10009,
                "parent_id" => 10039,
                "position" => "Коммерческая дирекция",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CC8",
                "department_id" => 0,
                "register_contacts" => 10009,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10010,
                "parent_id" => 10009,
                "position" => "Коммерческий директор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10012,
                "parent_id" => 10039,
                "position" => "HR - Дирекция",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CD8",
                "department_id" => 0,
                "register_contacts" => 10012,
                "department_hr" => 1
            ],
            [
                "id" => 10014,
                "parent_id" => 10012,
                "position" => "HR-директор",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB40",
                "department_id" => 14,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10013,
                "parent_id" => 10014,
                "position" => "Специалист по кадровому администрированию",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E00000951D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [

                "id" => 10015,
                "parent_id" => 51252,
                "position" => "Руководитель Юридического Отдела",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009918AC0",
                "department_id" => 1,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],

            [
                "id" => 10017,
                "parent_id" => 10014,
                "position" => "Руководитель направления по кадровому и компенсационному администрированию",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E00008450F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10018,
                "parent_id" => 10014,
                "position" => "Специалист по обучению и развитию персонала",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E00000954A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10043,
                "parent_id" => 10039,
                "position" => "блок4",
                "status" => -1,
                "is_department" => 1,
                "hid" => "0x5BFE00000959B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10019,
                "parent_id" => 10043,
                "position" => "Департамент счастливого клиента",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE00000959BFC000012A97",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10020,
                "parent_id" => 10019,
                "position" => "Руководитель ДСК",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE00000959BFC000012A97F80000255320",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10021,
                "parent_id" => 10019,
                "position" => "ДДМ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE00000959BFC000012A97F80000255360",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10022,
                "parent_id" => 10039,
                "position" => "Финансовая дирекция",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CB8",
                "department_id" => 0,
                "register_contacts" => 10022,
                "department_hr" => 1
            ], [
                "id" => 10023,
                "parent_id" => 10022,
                "position" => "Финансовый директор",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012A9F",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10025,
                "parent_id" => 10022,
                "position" => "Финансовый директор",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40374,
                "parent_id" => 10025,
                "position" => "Бухгалтера",
                "status" => 0,
                "is_department" => 1,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10026,
                "parent_id" => 40374,
                "position" => "Зам. главного бухгалтера по налоговому учету",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF000004AAD4",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10027,
                "parent_id" => 40374,
                "position" => "Бухгалтер по ведению безналичных расчетов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF000004AADC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10028,
                "parent_id" => 40374,
                "position" => "Бухгалтер по учету ОС, МБП, ПЛ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF000004AAE4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10030,
                "parent_id" => 40374,
                "position" => "Главный бухгалтер",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF000004AAF4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10031,
                "parent_id" => 10039,
                "position" => "Дирекция производства",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C98",
                "department_id" => 0,
                "register_contacts" => 10031,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10032,
                "parent_id" => 10031,
                "position" => "Директор производства",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11",
                "department_id" => 5,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10033,
                "parent_id" => 10038,
                "position" => "Отдел Контроля Качества",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990B8",
                "department_id" => 0,
                "register_contacts" => 10033,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10034,
                "parent_id" => 10033,
                "position" => "Директор по  Контролю Качества",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15",
                "department_id" => 11,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10035,
                "parent_id" => 10038,
                "position" => "Техническая дирекция",
                "status" => 0,
                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE0000099198",
                "department_id" => 0,
                "register_contacts" => 10035,
                "department_hr" => 1
            ],
            [
                "id" => 41061,
                "parent_id" => 10035,
                "position" => "Директор технической дирекции",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09B",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10016,
                "parent_id" => 41061,
                "position" => "Проектный менеджер",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAA",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10036,
                "parent_id" => 41061,
                "position" => "Инженер по системам кондиционирования и холодильному оборудованию",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BBA",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10037,
                "parent_id" => 10038,
                "position" => "Дирекция логистики",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990E8",
                "department_id" => 0,
                "register_contacts" => 10037,
                "department_hr" => 1
            ],
            [
                "id" => 10040,
                "parent_id" => 10039,
                "position" => "блок1",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095988",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10041,
                "parent_id" => 10039,
                "position" => "блок2",
                "status" => -1,
                "is_department" => 1,
                "hid" => "0x5BFE0000095998",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10042,
                "parent_id" => 10039,
                "position" => "блок3",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE00000959A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10044,
                "parent_id" => 10020,
                "position" => "Контакт центр",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE00000959BFC000012A97F8000025533F000004ACE4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10045,
                "parent_id" => 10044,
                "position" => "Руководитель Отдела Сервиса",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE00000959BFC000012A97F8000025533F000004ACE7E00000959D80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10047,
                "parent_id" => 10039,
                "position" => "блок5",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE00000959F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10048,
                "parent_id" => 10038,
                "position" => "Административно-Хозяйственная Служба",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE0000099088",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => 1
            ],
            [
                "id" => 51273,
                "parent_id" => 10032,
                "position" => "Столовая",
                "status" => 0,
                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F80000261620",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => 1
            ],
            [
                "id" => 10049,
                "parent_id" => 51273,
                "position" => "Заведующий хозяйственным отделом ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162B",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10052,
                "parent_id" => 10032,
                "position" => "Экспериментальный цех",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F80000257320",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => 1
            ],
            [
                "id" => 10053,
                "parent_id" => 10032,
                "position" => "Департамент Учета",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F80000257360",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => 1
            ],
            [
                "id" => 10054,
                "parent_id" => 10032,
                "position" => "ПЦ 'Классика'",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F80000261760",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => 1
            ],
            [
                "id" => 10055,
                "parent_id" => 10032,
                "position" => "ПЦ 'Сладкая Европа'",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002573E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10056,
                "parent_id" => 10032,
                "position" => "ПЦ 'Эксклюзив'",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F80000257620",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => 1
            ],
            [
                "id" => 10057,
                "parent_id" => 10032,
                "position" => "ПЦ 'Восток'",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F80000261320",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10058,
                "parent_id" => 10052,
                "position" => "Главный Технолог",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025733F000004AED4",
                "department_id" => 13,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10059,
                "parent_id" => 10058,
                "position" => "Технолог-разработчик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025733F000004AED7E0000095DB80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10060,
                "parent_id" => 10058,
                "position" => "Технолог",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025733F000004AED7E0000095DC80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10061,
                "parent_id" => 10058,
                "position" => "Инженер-технолог",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025733F000004AED7E0000095DD80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10062,
                "parent_id" => 10058,
                "position" => "Технолог",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025733F000004AED7E0000095DE80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10063,
                "parent_id" => 10058,
                "position" => "Технолог",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025733F000004AED7E0000095DF80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10064,
                "parent_id" => 10053,
                "position" => "Директор Департамента Учета",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C044",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40615,
                "parent_id" => 10064,
                "position" => "Заведующий складом сырья и полуфабрикатов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555B80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41067,
                "parent_id" => 40615,
                "position" => "Отдел учета сырья и полуфабрикатов",
                "status" => 0,
                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10066,
                "parent_id" => 41067,
                "position" => "Кладовщик-холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE00000980A80",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10067,
                "parent_id" => 10064,
                "position" => "Руководитель отдела очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980B80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10068,
                "parent_id" => 41067,
                "position" => "Кладовщик-холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE00000980C80",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10069,
                "parent_id" => 41067,
                "position" => "Специалист по производственному учету",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE0000851D980",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51272,
                "parent_id" => 10032,
                "position" => "Служба учета готовой продукции",
                "status" => 0,
                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10070,
                "parent_id" => 51272,
                "position" => "Руководитель службы учета готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613AB",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10071,
                "parent_id" => 10014,
                "position" => "Специалист по поиску и подбору персонала",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E00000980F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40201,
                "parent_id" => 10039,
                "position" => "Дирекция маркетинга",
                "status" => 0,
                "is_department" => 1,
                "hid" => "0x5BFE0000095CE8",
                "department_id" => 0,
                "register_contacts" => 40201,
                "department_hr" => 1
            ],
            [
                "id" => 10072,
                "parent_id" => 40201,
                "position" => "Директор по маркетингу",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAC0",
                "department_id" => 10,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52081,
                "parent_id" => 10072,
                "position" => "Заместитель директора по маркетингу",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE0000845098",
                "department_id" => 10,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40190,
                "parent_id" => 52081,
                "position" => "Contact centre",
                "status" => 0,
                "is_department" => 1,
                "hid" => "0x5BFE0000095CEAFE000084509E0B80",
                "department_id" => 0,
                "register_contacts" => 40190,
                "department_hr" => 1
            ],
            [
                "id" => 40173,
                "parent_id" => 40190,
                "position" => "Руководитель Contact centre",
                "status" => -1,
                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0BFC0001088BB0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],


            [
                "id" => 10046,
                "parent_id" => 40173,
                "position" => "Оператор  Contact centre",
                "status" => -1,
                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0BFC0001088BBF800002567A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10076,
                "parent_id" => 10020,
                "position" => "Сотрудники",
                "status" => -1,
                "is_department" => 1,
                "hid" => "0x5BFE00000959BFC000012A97F8000025533F000004C0E4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10073,
                "parent_id" => 10076,
                "position" => "Интернет-маркетолог",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE00000959BFC000012A97F8000025533F000004C0E7E00000981980",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10074,
                "parent_id" => 10072,
                "position" => "Brand-менеджер",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE00000981A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10075,
                "parent_id" => 52081,
                "position" => "Digital manager",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0A80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],

            [
                "id" => 10077,
                "parent_id" => 10076,
                "position" => "Графический дизайнер",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE00000959BFC000012A97F8000025533F000004C0E7E00000981D80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10078,
                "parent_id" => 40173,
                "position" => "Специалист по доставке",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0BFC0001088BBF800002607A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10079,
                "parent_id" => 10056,
                "position" => "Директор ПЦ 'Эксклюзив'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FC",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40145,
                "parent_id" => 10079,
                "position" => "Зам директора  ПЦ 'Эксклюзив'",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE00008440980",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10080,
                "parent_id" => 40145,
                "position" => "Служба эксклюзивного оформления",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC0000130910",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10081,
                "parent_id" => 40145,
                "position" => "Руководитель Службы 'Эксклюзив'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC0000130930",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10082,
                "parent_id" => 40145,
                "position" => "Руководитель службы 'ChocoLand'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC0000130950",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10083,
                "parent_id" => 10054,
                "position" => "Директор ПЦ 'Классика'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27C",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10084,
                "parent_id" => 10083,
                "position" => "Руководитель Службы полуфабрикатов",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984C80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10086,
                "parent_id" => 10083,
                "position" => "Зам Директора  ПЦ Классика",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984D80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40833,
                "parent_id" => 10086,
                "position" => "Служба полуфабрикатов",
                "status" => 0,
                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B1930",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10085,
                "parent_id" => 40833,
                "position" => "Руководитель Службы полуфабрикатов",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026136",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52158,
                "parent_id" => 10032,
                "position" => "ПЦ 'Десерты Мира'",
                "status" => 0,
                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => 1
            ],
            [
                "id" => 51742,
                "parent_id" => 52158,
                "position" => "Директор  ПЦ «Десерты мира» ",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10088,
                "parent_id" => 51742,
                "position" => "Зам директора ПЦ 'Десерты Мира'",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED68",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10089,
                "parent_id" => 10057,
                "position" => "Директор ПЦ 'Восток'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026133F000004C2CC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10091,
                "parent_id" => 10034,
                "position" => "Руководитель лаборатории",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F800002616E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10092,
                "parent_id" => 10034,
                "position" => "Лаборант х/б анализов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F80000261720",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10093,
                "parent_id" => 10034,
                "position" => "Руководитель отдела контроля качества",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F80000261760",
                "department_id" => 11,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10094,
                "parent_id" => 51595,
                "position" => "Директор ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10095,
                "parent_id" => 51484,
                "position" => "Территориальный менеджер ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BBAF0",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10096,
                "parent_id" => 51275,
                "position" => "Руководитель по startup ФС ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC11A60",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10097,
                "parent_id" => 51357,
                "position" => "Менеджер направления  бара",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDAAF0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10098,
                "parent_id" => 52231,
                "position" => "Региональный менеджер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EB",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10099,
                "parent_id" => 51585,
                "position" => "И.о. менеджера магазина ФМ 12 мкр",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC116AD60",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10100,
                "parent_id" => 51274,
                "position" => "Менеджер магазина ФМ 9 мкр",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1185B9620",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10101,
                "parent_id" => 51585,
                "position" => "Менеджера магазина ФМ Ак-Эмир",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC116AE10",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10102,
                "parent_id" => 52269,
                "position" => "Управляющий ФМ Акун",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDB2D580",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10103,
                "parent_id" => 51585,
                "position" => "Менеджер магазина ФМ Аламедин 1",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC116AE70",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10104,
                "parent_id" => 51274,
                "position" => "Менеджер магазина ФМ Весна",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1185B64",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10105,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212676",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10106,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212336",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10107,
                "parent_id" => 51274,
                "position" => "Менеджер магазина ФМ Джал",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1185B7C",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10108,
                "parent_id" => 51585,
                "position" => "Менеджер магазина ФМ Елки-Палки",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC116AF0440",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10109,
                "parent_id" => 51585,
                "position" => "Менеджера магазина ФМ Ж-Жолу",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC116AE98",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10110,
                "parent_id" => 51585,
                "position" => "Менеджер магазина ФМ Улан",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC116ADE0",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10111,
                "parent_id" => 51585,
                "position" => "Менеджер магазина ФМ Плаза",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC116AE30",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10112,
                "parent_id" => 51274,
                "position" => "Менеджер магазина ФМ Политех",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1185B8320",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10113,
                "parent_id" => 51265,
                "position" => "Руководитель отдела хранения",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE558",
                "department_id" => 15,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10114,
                "parent_id" => 51265,
                "position" => "Руководитель отдела хранения",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE568",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10115,
                "parent_id" => 51599,
                "position" => "Руководитель отдела планирования и отгрузки ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F8000212762B9D60",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51268,
                "parent_id" => 10038,
                "position" => "Дирекция по корпоративной безопасности",
                "status" => 0,
                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE0000098DB8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => 1
            ],
            [
                "id" => 10116,
                "parent_id" => 51268,
                "position" => "Директор по корпоративной безопасности",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAC0",
                "department_id" => 16,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
             [
                "id" => 10050,
                "parent_id" => 10116,
                "position" => "Служба Безопасности",
                "status" => 0,
                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449F8",
                "department_id" => 0,
                "register_contacts" => 10050,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52040,
                "parent_id" => 10116,
                "position" => "Руководитель департамента экономической безопасности",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE0000844C88",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10029,
                "parent_id" => 52040,
                "position" => "Аудитор",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE0000844C8B40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10117,
                "parent_id" => 40507,
                "position" => "Заведующий Гаражом",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD60",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10118,
                "parent_id" => 51267,
                "position" => "Руководитель отдела снабжения",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE358",
                "department_id" => 12,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10119,
                "parent_id" => 10037,
                "position" => "Директор по логистике",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10120,
                "parent_id" => 51314,
                "position" => "Менеджер по снабжению",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE35FC0000131B98C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10121,
                "parent_id" => 10050,
                "position" => "Руководитель департамента охраны",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10122,
                "parent_id" => 40507,
                "position" => "Руководитель дневной смены ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADA0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10123,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021632E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10124,
                "parent_id" => 10049,
                "position" => "Заведующий столовой (ЗСТ)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF80000263720",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10125,
                "parent_id" => 41061,
                "position" => "Инженер по тепловодоснабжению, газоснабжению и канализации",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BB2",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10126,
                "parent_id" => 41061,
                "position" => "Главный механик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAE",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10127,
                "parent_id" => 40169,
                "position" => "Руководитель Оперативного Отдела",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF00004222CFE0000098DF8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10128,
                "parent_id" => 40181,
                "position" => "Директор по цифровой трансформации",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891F",
                "department_id" => 9,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10129,
                "parent_id" => 41110,
                "position" => "ИТ-администратор (фабрика)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021826B2AD60",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10130,
                "parent_id" => 10128,
                "position" => "Специалист по обслуживанию ПС и ВН",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF80002182720",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10131,
                "parent_id" => 41061,
                "position" => "Руководитель департамента строительства",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BB6",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10132,
                "parent_id" => 10131,
                "position" => "Специалист по СМР",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BB7F000004C8640",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10133,
                "parent_id" => 40374,
                "position" => "Заместитель главного бухгалтера по управленческому учету",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF000004C86C",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10134,
                "parent_id" => 40374,
                "position" => "Бухгалтер по расчетам с поставщиками",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF000004C874",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10136,
                "parent_id" => 40374,
                "position" => "Бухгалтер-кассир",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF000004C8C4",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10137,
                "parent_id" => 40380,
                "position" => "Старший Программист 1С",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F8000212733F000004C8CC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10138,
                "parent_id" => 51380,
                "position" => "Старший программист 1С",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021827AF8C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 20130,
                "parent_id" => 10023,
                "position" => "Руководитель Отдела труда и заработных плат (РОТиЗП)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012A9FF80000B452A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 20131,
                "parent_id" => 20130,
                "position" => "Специалист по нормированию труда",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012A9FF80000B452BF0000168A5C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 20132,
                "parent_id" => 40374,
                "position" => "Специалист по нормированию труда",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF0000168A64",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 20133,
                "parent_id" => 20130,
                "position" => "Специалист отдела труда и заработных плат",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012A9FF80000B452BF0000168A6C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 20134,
                "parent_id" => 40374,
                "position" => "Экономист по калькулированию",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF0000168A74",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 20135,
                "parent_id" => 10116,
                "position" => "ОсОО 'ЗТШ'",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 20136,
                "parent_id" => 20135,
                "position" => "Коммерческий директор",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B1",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 20137,
                "parent_id" => 20135,
                "position" => "Директор производства ЗТШ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 20138,
                "parent_id" => 20135,
                "position" => "Финансовый аналитик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B5",
                "department_id" => 8,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 20139,
                "parent_id" => 20138,
                "position" => "Бухгалтер ЗТШ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B5F80000B456E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 30137,
                "parent_id" => 30140,
                "position" => "Исполнительный директор",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EFC0",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 30138,
                "parent_id" => 30137,
                "position" => "HR-специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EFFE00006099A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 30139,
                "parent_id" => 40155,
                "position" => "Директор по развитию",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE0000844598",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 30140,
                "parent_id" => 10011,
                "position" => "Директор ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266A",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 30141,
                "parent_id" => 40155,
                "position" => "Директор отдела маркетинга ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40141,
                "parent_id" => 51465,
                "position" => "Руководитель отдела продаж",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990CAC0",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40142,
                "parent_id" => 52494,
                "position" => "Заведующий центральным складом",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D55C2",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40143,
                "parent_id" => 51274,
                "position" => "Менеджер магазина  ФМ Азия Молл",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1185B18",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40144,
                "parent_id" => 40155,
                "position" => "Ревизор ТОО 'Куликовский Казахстан'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE0000844498",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],

            [
                "id" => 40146,
                "parent_id" => 52489,
                "position" => "Зав.складом ГП",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786B080",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40147,
                "parent_id" => 52494,
                "position" => "Заведующий центральным складом",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D55B4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40148,
                "parent_id" => 52494,
                "position" => "Заведующий центральным складом",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D55AC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40149,
                "parent_id" => 52492,
                "position" => "Заведующий складом МО",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D35C6",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40150,
                "parent_id" => 52492,
                "position" => "Заведующий складом МО",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D35C2",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40151,
                "parent_id" => 51380,
                "position" => "программист 1С",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021827AF84",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40152,
                "parent_id" => 20137,
                "position" => "Руководитель Службы Учета",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F80002110620",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40153,
                "parent_id" => 20138,
                "position" => "Заведующий складом",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B5F80000B45720",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40154,
                "parent_id" => 30137,
                "position" => "Главный бухгалтер ТОО ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EFFE00008441A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40155,
                "parent_id" => 30140,
                "position" => "Административный директор ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEC0",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40156,
                "parent_id" => 41073,
                "position" => "Старший водитель-экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD880",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40157,
                "parent_id" => 40374,
                "position" => "Бухгалтер по ОС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF00004220EC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40158,
                "parent_id" => 40155,
                "position" => "Главный бухгалтер ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE0000844588",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40159,
                "parent_id" => 40158,
                "position" => "Бухгалтер по ТМЦ и ОС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084458DF0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40160,
                "parent_id" => 40155,
                "position" => "Бухгалтер ФС ТОО",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE0000844488",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40161,
                "parent_id" => 30139,
                "position" => "Инженер по холодильному оборудованию ТОО",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084459FC000108893",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40162,
                "parent_id" => 10025,
                "position" => "Руководитель Ревизионной Комиссии",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021112A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40163,
                "parent_id" => 30141,
                "position" => "Трейд-маркетинг менеджер ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444BFC000108897",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40164,
                "parent_id" => 30140,
                "position" => "Специалист по КДП ТОО",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304E7C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40165,
                "parent_id" => 40374,
                "position" => "Материальный бухгалтер",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF000042226C",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40166,
                "parent_id" => 40168,
                "position" => "Технический директор ТОО Куликовский Казахстан",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444EB5E",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40167,
                "parent_id" => 10015,
                "position" => "Старший юрист Компании",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009918AFE00008444F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40168,
                "parent_id" => 51353,
                "position" => "Заместитель директора логистики ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444EB40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40169,
                "parent_id" => 10126,
                "position" => "Инженер-Энергетик",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF00004222CC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40170,
                "parent_id" => 51274,
                "position" => "Менеджера магазина ФМ Россия",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1185B9360",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40171,
                "parent_id" => 10010,
                "position" => "Отдел коммуникаций",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021116E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40172,
                "parent_id" => 10020,
                "position" => "Отдел заказной продукции",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE00000959BFC000012A97F8000025533F00004222E4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40174,
                "parent_id" => 51274,
                "position" => "Менеджер магазина ФМ Шоурум",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1185B92A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40175,
                "parent_id" => 30139,
                "position" => "HR-менеджер",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084459FC0001088BF",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40176,
                "parent_id" => 10014,
                "position" => "Руководитель направления по обучению и развитию",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E0000844888",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40177,
                "parent_id" => 51585,
                "position" => "Менеджера магазина ФМ Восток - 5",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC116AEC8",
                "department_id" => 5,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40178,
                "parent_id" => 51579,
                "position" => "Руководитель направления бранч",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDA2",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40179,
                "parent_id" => 10020,
                "position" => "Content-manager",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE00000959BFC000012A97F8000025533F000042245C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40180,
                "parent_id" => 10076,
                "position" => "Видеопродакшн менеджер",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE00000959BFC000012A97F8000025533F000004C0E7E00000981E80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40181,
                "parent_id" => 10039,
                "position" => "Дирекция цифровой трансформации",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C88",
                "department_id" => 0,
                "register_contacts" => 40181,
                "department_hr" => 1
            ],
            [
                "id" => 40182,
                "parent_id" => 40181,
                "position" => "Директор по цифровым технологиям",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891D",
                "department_id" => 7,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40183,
                "parent_id" => 10128,
                "position" => "Руководитель департамента информационных технологий",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021826A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40184,
                "parent_id" => 3,
                "position" => " Директор по организационному развитию",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CFFC00010899F",
                "department_id" => 1,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40185,
                "parent_id" => 40374,
                "position" => "Бухгалтер по ведению расчетов с покупателями",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF00004224CC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40186,
                "parent_id" => 40374,
                "position" => "Расчетный бухгалтер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF00004224D4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40187,
                "parent_id" => 20135,
                "position" => "Супервайзер ЗТШ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2BB",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40188,
                "parent_id" => 51598,
                "position" => "Руководитель департамента экономики",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F8000212762B",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10135,
                "parent_id" => 40188,
                "position" => "Старший специалист по бюджетированию",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F8000212762B78",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10024,
                "parent_id" => 40188,
                "position" => "Специалист по БК и ФА",
                "status" => -1,
                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F8000212762B68",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40189,
                "parent_id" => 51585,
                "position" => "Менеджера магазина ФМ Плаза-2",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC116AE50",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],

            [
                "id" => 40191,
                "parent_id" => 52513,
                "position" => "Специалист по рекрутингу и адаптации",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E000084519AC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40192,
                "parent_id" => 51274,
                "position" => "Менеджера магазина ФМ ЮГ-2",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1185AD0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40193,
                "parent_id" => 10014,
                "position" => "Специалист по контенту",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E0000844C98",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40194,
                "parent_id" => 51213,
                "position" => "Графический дизайнер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509D1680",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40195,
                "parent_id" => 40145,
                "position" => "Отдел приема и обработки заказов",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC0001089970",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40196,
                "parent_id" => 40195,
                "position" => "Руководитель Отдела приема и обработки заказов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000108997F8000211332",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40197,
                "parent_id" => 52230,
                "position" => "Руководитель ОТ и ТБ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990FAC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40198,
                "parent_id" => 51585,
                "position" => "Менеджер магазина ФМ Тоголок Молдо",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC116AF0640",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40199,
                "parent_id" => 52513,
                "position" => "Руководитель направления по рекрутингу и адаптации",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E000084519C20",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40200,
                "parent_id" => 40374,
                "position" => "Заместитель главного бухгалтера по налоговому учёту",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF00004226C4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],

            [
                "id" => 40202,
                "parent_id" => 10088,
                "position" => "ПРОЧИЕ",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC0001089B5",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40203,
                "parent_id" => 40202,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC0001089B5F800021136E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40204,
                "parent_id" => 10095,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BBAFF8000211372",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40205,
                "parent_id" => 51579,
                "position" => "Сервис - консультанты",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC150",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40206,
                "parent_id" => 40374,
                "position" => "Бухгалтер по сырью",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF00004226F4",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40207,
                "parent_id" => 40205,
                "position" => "Бариста",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021137E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40208,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211422",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40209,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211426",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40210,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021142A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40211,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021142E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40212,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211432",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40213,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211436",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40214,
                "parent_id" => 40205,
                "position" => "Бариста",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021143A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40215,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021143E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40216,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211462",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40217,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211466",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40218,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021146A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40219,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021146E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40220,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211472",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40221,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211476",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40222,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021147A",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40223,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021147E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40224,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211522",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40225,
                "parent_id" => 40374,
                "position" => "Помощник бухгалтера",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF0000422864",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40226,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021152A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40227,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021152E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40228,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211532",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40229,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211536",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40230,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021153A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40231,
                "parent_id" => 40205,
                "position" => "Бариста",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021153E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40232,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211562",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40233,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021317A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40234,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021156A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40235,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021156E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40236,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211572",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40237,
                "parent_id" => 51889,
                "position" => "Бариста",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC11B7280",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40238,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021157A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40239,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021157E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40240,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211622",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40241,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211626",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40242,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021162A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40243,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021162E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40244,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211632",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40245,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211636",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40246,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021163A",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40247,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021163E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40248,
                "parent_id" => 40205,
                "position" => "Бариста",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211662",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40249,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211666",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40250,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021166A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40251,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021166E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40252,
                "parent_id" => 40293,
                "position" => "уборщица ФМ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F800021227A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40253,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211676",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40254,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021167A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40255,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021167E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40256,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211722",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40257,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211726",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40258,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021172A",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40259,
                "parent_id" => 40205,
                "position" => "Официант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021172E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40260,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211732",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40261,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211736",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40262,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021173A",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40263,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021173E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40264,
                "parent_id" => 40205,
                "position" => "Официант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211762",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40265,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211766",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40266,
                "parent_id" => 40205,
                "position" => "Бариста",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021176A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40267,
                "parent_id" => 40205,
                "position" => "Официант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021176E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40268,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211772",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40269,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000211776",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40270,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021177A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40271,
                "parent_id" => 40205,
                "position" => "Операционист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021177E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40272,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212022",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40273,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212026",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40274,
                "parent_id" => 40293,
                "position" => "Уборщица ФМ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F8000212322",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40275,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021202E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40276,
                "parent_id" => 40205,
                "position" => "Бариста",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212032",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40277,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212036",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40278,
                "parent_id" => 40205,
                "position" => "Бариста",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021203A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40279,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021203E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40280,
                "parent_id" => 51274,
                "position" => "Менеджера магазина ФМ Ай-Молл",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1185B8660",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40281,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212066",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40282,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021206A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40283,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021206E",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40284,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212072",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40285,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212076",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40286,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021207A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40287,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021207E",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40288,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212122",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40289,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212126",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40290,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021212A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40291,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021212E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40292,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212132",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40293,
                "parent_id" => 51579,
                "position" => "Клининг-специалист ФМ",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC170",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40294,
                "parent_id" => 40293,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F800021213A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40295,
                "parent_id" => 40205,
                "position" => "Сервис консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212172",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40296,
                "parent_id" => 40293,
                "position" => "Уборщица ФМ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F8000212162",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40297,
                "parent_id" => 40293,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F8000212166",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40298,
                "parent_id" => 40293,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F800021216A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40299,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000213022",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40300,
                "parent_id" => 40317,
                "position" => "Клининг-специалист производственных и бытовых помещений",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004268FC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40301,
                "parent_id" => 40293,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F8000212176",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40302,
                "parent_id" => 40205,
                "position" => "Бариста",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021232A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40303,
                "parent_id" => 40293,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F800021217E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40304,
                "parent_id" => 40293,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F8000212222",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40305,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212176",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40306,
                "parent_id" => 40293,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F800021222A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40307,
                "parent_id" => 40293,
                "position" => "Клининг-специалист ФМ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F800021222E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40308,
                "parent_id" => 40293,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F8000212232",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40309,
                "parent_id" => 40293,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F8000212236",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40310,
                "parent_id" => 40293,
                "position" => "Уборщица ФМ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F800021223A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40311,
                "parent_id" => 10025,
                "position" => "Операционисты",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021223E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40312,
                "parent_id" => 10124,
                "position" => "Хозяйственный отдел",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026373F00004244C4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40313,
                "parent_id" => 10124,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026373F00004244CC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40314,
                "parent_id" => 10049,
                "position" => "Хозяйственный отдел",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF80000263760",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40315,
                "parent_id" => 10123,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021632FF00004244DC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40316,
                "parent_id" => 40315,
                "position" => "АХС",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021632FF00004244DFE00008489C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40317,
                "parent_id" => 40512,
                "position" => "Уборщицы",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACE0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40318,
                "parent_id" => 51388,
                "position" => "Мойщики",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40319,
                "parent_id" => 40311,
                "position" => "Операционист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021223FF00004244FC",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40320,
                "parent_id" => 40314,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F0000424644",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40321,
                "parent_id" => 40311,
                "position" => "Операционист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021223FF000042464C",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40322,
                "parent_id" => 40314,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F0000424654",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40323,
                "parent_id" => 40374,
                "position" => "Бухгалтер-кассир",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF00004226FC",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40324,
                "parent_id" => 40314,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F0000424664",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40325,
                "parent_id" => 40314,
                "position" => "Младший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F000042466C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40326,
                "parent_id" => 40374,
                "position" => "Бухгалтер по ведению расчетов с поставщиками услуг",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF00004226D4",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40327,
                "parent_id" => 40314,
                "position" => "Младший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F000042467C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40328,
                "parent_id" => 40374,
                "position" => "Бухгалтер по ведению безналичных расчетов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF00004226CC",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40329,
                "parent_id" => 40314,
                "position" => "Младший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F00004246CC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40330,
                "parent_id" => 40314,
                "position" => "Младший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F00004246D4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40331,
                "parent_id" => 40314,
                "position" => "Младший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F00004246DC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40332,
                "parent_id" => 40314,
                "position" => "Младший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F00004246E4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40333,
                "parent_id" => 40314,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F00004246EC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40334,
                "parent_id" => 40314,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F00004246F4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40335,
                "parent_id" => 40314,
                "position" => "Младший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F00004246FC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40336,
                "parent_id" => 40314,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F0000424844",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40337,
                "parent_id" => 40314,
                "position" => "Младший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F000042484C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40338,
                "parent_id" => 40314,
                "position" => "Старший специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F0000424854",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40339,
                "parent_id" => 52066,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021516AD0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40340,
                "parent_id" => 40314,
                "position" => "Младший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F0000424864",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40341,
                "parent_id" => 40314,
                "position" => "Младший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F000042486C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40342,
                "parent_id" => 40314,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F0000424874",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40343,
                "parent_id" => 40660,
                "position" => "грузчик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC00010A819F8000215066",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40344,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE0000849188",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40345,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE0000849198",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40346,
                "parent_id" => 40849,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C84FE00008594E8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40347,
                "parent_id" => 40634,
                "position" => "Холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A335F80002147220",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40348,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE00008491C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40349,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE00008491D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40350,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE00008491E8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40351,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE00008491F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40352,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE0000849488",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40353,
                "parent_id" => 40613,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A29BF80002146360",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40354,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE00008494A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40355,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE00008494B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40356,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE00008494C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40357,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE00008494D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40358,
                "parent_id" => 41068,
                "position" => "Оператор чистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F8000216326",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40359,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE00008494F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40360,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE0000849588",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40361,
                "parent_id" => 40318,
                "position" => "Мойщик-посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE0000849598",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40362,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE00008495A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40363,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C5F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40364,
                "parent_id" => 40146,
                "position" => "прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786B0FC0001092B90",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40365,
                "parent_id" => 40318,
                "position" => "Мойщик-посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE00008495D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40366,
                "parent_id" => 40364,
                "position" => "Старший смены склада ГП",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786B0FC0001092B9F800021257A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40367,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE00008495F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40368,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE0000849888",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40369,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE0000849898",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40370,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE00008498A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40371,
                "parent_id" => 40146,
                "position" => "зав. складом ГП",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786B0FC0001093170",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40372,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE00008498C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40373,
                "parent_id" => 10025,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CBFC000012AB3F80002126360",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40375,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000424C7C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40376,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000424CC4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40377,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000424CCC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40378,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000424CD4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40379,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000424CDC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40380,
                "parent_id" => 10025,
                "position" => "Отдел разработки и поддержки учетных систем",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CBFC000012AB3F80002127320",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40381,
                "parent_id" => 40317,
                "position" => "Оператор по обработке яиц",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000424CEC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40382,
                "parent_id" => 51899,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C84574C",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40383,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000424CFC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40384,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000424E44",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40385,
                "parent_id" => 10113,
                "position" => "прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990EAE55FC000109393",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40386,
                "parent_id" => 10113,
                "position" => "прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990EAE55FC000109395",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40387,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000424E5C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40388,
                "parent_id" => 10113,
                "position" => "склад ГП",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990EAE55FC000109399",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40389,
                "parent_id" => 40317,
                "position" => "Клининг-специалист производственных и бытовых помещений",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000424E6C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40390,
                "parent_id" => 52489,
                "position" => "Зав. складом ГП",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786B180",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40391,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000424E7C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40392,
                "parent_id" => 52490,
                "position" => "Кладовщик склада ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786F640",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40393,
                "parent_id" => 41071,
                "position" => "Менеджер склада готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F8000212766",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40394,
                "parent_id" => 51939,
                "position" => "Оператор подготовки инвентаря",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A33768",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40395,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000424EDC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40396,
                "parent_id" => 41071,
                "position" => "Кладовщик склада ГП",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F8000212772",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40397,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000424EEC",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40398,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000424EF4",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40399,
                "parent_id" => 52490,
                "position" => "Кладовщик склада ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786F6C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40400,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004268F4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40401,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF000042604C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40402,
                "parent_id" => 40317,
                "position" => "Клининг-специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426054",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40403,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF000042605C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40404,
                "parent_id" => 52490,
                "position" => "Кладовщик склада ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786F380",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40405,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF000042606C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40406,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426074",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40407,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF000042607C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40408,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004260C4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40409,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004260CC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40410,
                "parent_id" => 52490,
                "position" => "Кладовщик склада ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786F440",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40411,
                "parent_id" => 41068,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021632A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40412,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004260E4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40413,
                "parent_id" => 52490,
                "position" => "Кладовщик склада ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786F280",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40414,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004260F4",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40415,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004260FC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40416,
                "parent_id" => 52490,
                "position" => "Кладовщик склада ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786F540",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40417,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF000042624C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40418,
                "parent_id" => 41159,
                "position" => "Кладовщик склада ГП",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786AD58",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40419,
                "parent_id" => 52490,
                "position" => "Кладовщик склада ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786F4C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40420,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C4C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40421,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C4D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40422,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C4E8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40423,
                "parent_id" => 52490,
                "position" => "Кладовщик склада ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786F5C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40424,
                "parent_id" => 52489,
                "position" => "Заведующий складом ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786B280",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40425,
                "parent_id" => 52490,
                "position" => "Кладовщик склада ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786EB",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40426,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004262D4",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40427,
                "parent_id" => 52490,
                "position" => "Кладовщик склада ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786EF",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40428,
                "parent_id" => 40660,
                "position" => "Грузчик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC00010A819F8000215062",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40429,
                "parent_id" => 40999,
                "position" => "Уборщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF800021806A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40430,
                "parent_id" => 52489,
                "position" => "Заведующий складом ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786AB",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40431,
                "parent_id" => 52490,
                "position" => "Кладовщик склада ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786F180",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40432,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426444",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40433,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF000042644C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40434,
                "parent_id" => 52490,
                "position" => "Кладовщик склада ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786F080",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40435,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF000042645C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40436,
                "parent_id" => 10113,
                "position" => "склад материалов и оборудования",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990EAE55FC000109919",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40437,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF000042646C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40438,
                "parent_id" => 10034,
                "position" => "Лаборант-средовар",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F80002175360",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40439,
                "parent_id" => 40317,
                "position" => "прачка",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF000042647C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40440,
                "parent_id" => 41069,
                "position" => "Грузчик ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D36BC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40441,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004264CC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40442,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004264D4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40443,
                "parent_id" => 52490,
                "position" => "Кладовщик склада ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786ED",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40444,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004264E4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40445,
                "parent_id" => 52492,
                "position" => "Зав.складом МО",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D35BC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40446,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004264F4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40447,
                "parent_id" => 10113,
                "position" => "центральный склад",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990EAE55FC00010993F",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40448,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426644",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40449,
                "parent_id" => 41072,
                "position" => "Формировщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF0000430447E00008505980",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40450,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426654",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40451,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF000042665C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40452,
                "parent_id" => 41070,
                "position" => "Грузчик ЦС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D56FC0001099990",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40453,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF000042666C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40454,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426674",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40455,
                "parent_id" => 41070,
                "position" => "Грузчик ЦС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D56FC00010999F0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40456,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004266C4",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40457,
                "parent_id" => 41070,
                "position" => "Грузчик ЦС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D56FC0001099B30",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40458,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004266D4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40459,
                "parent_id" => 41068,
                "position" => "Оператор по обработке яиц",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021336E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40460,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004266E4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40461,
                "parent_id" => 41070,
                "position" => "Грузчик ЦС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D56FC0001099BB0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40462,
                "parent_id" => 40317,
                "position" => "Уборщик",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004266F4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40463,
                "parent_id" => 41070,
                "position" => "Грузчик ЦС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D56FC0001099BF0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40464,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426844",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40465,
                "parent_id" => 41070,
                "position" => "Грузчик ЦС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D56FC000109A130",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40466,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426854",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40467,
                "parent_id" => 10089,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026133F000004C2CFE000084D0B80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40468,
                "parent_id" => 40156,
                "position" => "Водитель - экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8D9",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40469,
                "parent_id" => 40156,
                "position" => "Водитель - экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8D7",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40470,
                "parent_id" => 10089,
                "position" => "Руководитель ПЦ 'Восток'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026133F000004C2CFE000084D0E80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40471,
                "parent_id" => 40156,
                "position" => "Водитель - экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8D5",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40472,
                "parent_id" => 40476,
                "position" => "Отдел формовки х/б , песочных изделий",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A33968",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40473,
                "parent_id" => 40156,
                "position" => "Водитель - экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8D3",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40474,
                "parent_id" => 41073,
                "position" => "Водитель - экспедитор",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084D1A80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40475,
                "parent_id" => 40536,
                "position" => "Кладовщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF000043044D6F",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40476,
                "parent_id" => 10088,
                "position" => "Руководитель Службы песочно-дрожжевых изделий",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A339",
                "department_id" => 5,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40477,
                "parent_id" => 40156,
                "position" => "Водитель - экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8D1",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40478,
                "parent_id" => 51271,
                "position" => "Руководитель Отдела изготовления ПБ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40479,
                "parent_id" => 40472,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC000109A3F",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40480,
                "parent_id" => 40156,
                "position" => "Водитель - экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8C2",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40481,
                "parent_id" => 40156,
                "position" => "Водитель - экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8BC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40482,
                "parent_id" => 40472,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC000109A95",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40483,
                "parent_id" => 40156,
                "position" => "Водитель - экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8C6",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40484,
                "parent_id" => 41073,
                "position" => "Водитель - экспедитор",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084D4C80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40485,
                "parent_id" => 41073,
                "position" => "Водитель - экспедитор",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084D4D80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40486,
                "parent_id" => 41073,
                "position" => "Водитель - экспедитор",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084D4E80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40487,
                "parent_id" => 41073,
                "position" => "Водитель - экспедитор",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084D4F80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40488,
                "parent_id" => 41073,
                "position" => "Водитель - экспедитор",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084D5880",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40489,
                "parent_id" => 41073,
                "position" => "Водитель - экспедитор",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084D5980",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40490,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397ADA",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40491,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC000109AB7",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40492,
                "parent_id" => 40156,
                "position" => "Водитель - экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8CA",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40493,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397ADE",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40494,
                "parent_id" => 40156,
                "position" => "Водитель - экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8CE",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40495,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC000109ABF",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40496,
                "parent_id" => 40156,
                "position" => "Водитель - экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8E0E8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40497,
                "parent_id" => 40156,
                "position" => "Водитель - экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8E0C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40498,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AE1",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40499,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC000109B17",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40500,
                "parent_id" => 41073,
                "position" => "Водитель - экспедитор",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084D8C80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40501,
                "parent_id" => 10117,
                "position" => "Водитель - экспедитор",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F0000426C6C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40502,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC000109B1D",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40503,
                "parent_id" => 40156,
                "position" => "Водитель - экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8E0B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40504,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AE3",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40505,
                "parent_id" => 40156,
                "position" => "Водитель - экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8E0A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40506,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC000109B35",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40507,
                "parent_id" => 52112,
                "position" => "Руководитель Службы Экспедирования",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AC",
                "department_id" => 16,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40508,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC000109B39",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40509,
                "parent_id" => 41073,
                "position" => "Водитель - экспедитор",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084D9D80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40510,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC000109B3D",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40511,
                "parent_id" => 40156,
                "position" => "Водитель - экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8E098",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40512,
                "parent_id" => 51385,
                "position" => "Бригадир службы клининга",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40513,
                "parent_id" => 40156,
                "position" => "Водитель - экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8E088",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40514,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC000109B95",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40515,
                "parent_id" => 10058,
                "position" => "Технолог по пищевой безопасности",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025733F000004AED7E00000981980",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40516,
                "parent_id" => 40156,
                "position" => "Водитель - экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8DF",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40517,
                "parent_id" => 40156,
                "position" => "Водитель - экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8DD",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40518,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AE5",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40519,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC000109B9F",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40520,
                "parent_id" => 40156,
                "position" => "Водитель-экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8E0F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40521,
                "parent_id" => 41072,
                "position" => "Формировщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF0000430447E000084DD980",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40522,
                "parent_id" => 41072,
                "position" => "Формировщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF0000430447E000084DDA80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40523,
                "parent_id" => 41072,
                "position" => "Формировщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF0000430447E000084DDB80",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40524,
                "parent_id" => 40536,
                "position" => "Кладовщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF000043044D74C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40525,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC000109BBB",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40526,
                "parent_id" => 40156,
                "position" => "Водитель-экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8E0D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40527,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC000109BBF",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40528,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC00010A011",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40529,
                "parent_id" => 40472,
                "position" => "Мастер ПЦ 'Десерты Мира'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC00010A013",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40530,
                "parent_id" => 40536,
                "position" => "Кладовщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF000043044D7080",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40531,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC00010A017",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40532,
                "parent_id" => 41072,
                "position" => "Формировщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF0000430447E00008500C80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40533,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC00010A01B",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40534,
                "parent_id" => 41072,
                "position" => "Формировщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF0000430447E00008500E80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40535,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AD6",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40536,
                "parent_id" => 51557,
                "position" => "Заведующий складом ОЭ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF000043044D60",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40537,
                "parent_id" => 40472,
                "position" => "Руководитель отдела формовки хб и песочных изделий",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC00010A033",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40538,
                "parent_id" => 41072,
                "position" => "формировщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF0000430447E00008501A80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40539,
                "parent_id" => 41072,
                "position" => "Старший Формировщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF0000430447E00008501B80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40540,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC00010A039",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40541,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AE980",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40542,
                "parent_id" => 40536,
                "position" => "Кладовщик ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF000043044D6B",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40543,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC00010A03F",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40544,
                "parent_id" => 40536,
                "position" => "Кладовщик ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF000043044D6D",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40545,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC00010A093",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40546,
                "parent_id" => 40472,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC00010A095",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40547,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC00010A097",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40548,
                "parent_id" => 40156,
                "position" => "водитель экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8DB",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40549,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AE880",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40550,
                "parent_id" => 41072,
                "position" => "Формировщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF0000430447E00008504E80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40551,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AE7",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40552,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC00010A0B1",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40553,
                "parent_id" => 10064,
                "position" => "прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008505980",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40554,
                "parent_id" => 40467,
                "position" => "Отдел замесов и выпечки х/б изделий",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026133F000004C2CFE000084D0BFC00010A0B50",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40555,
                "parent_id" => 40467,
                "position" => "Отдел замесов и выпечки х/б изделий",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026133F000004C2CFE000084D0BFC00010A0B70",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40556,
                "parent_id" => 40467,
                "position" => "Отдел замесов и выпечки х-б и изделий",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026133F000004C2CFE000084D0BFC00010A0B90",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40557,
                "parent_id" => 40476,
                "position" => "Отдел замесов и выпечки х/б и изделий",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A33958",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40558,
                "parent_id" => 40557,
                "position" => "Мастер ПЦ 'Десерты Мира'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BD",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40559,
                "parent_id" => 40558,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BD68",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40560,
                "parent_id" => 40558,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BD78",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40561,
                "parent_id" => 40558,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BD84",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40562,
                "parent_id" => 40558,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BD8C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40563,
                "parent_id" => 10064,
                "position" => "отдел учета сырья и полуфабрикатов",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008508B80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40564,
                "parent_id" => 40553,
                "position" => "отдел хранения и учета сырья",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E000085059FC00010A1190",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40565,
                "parent_id" => 40558,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BD94",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40566,
                "parent_id" => 40553,
                "position" => "отдел очистки сырья",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E000085059FC00010A11D0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40567,
                "parent_id" => 40558,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BD9C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40568,
                "parent_id" => 40558,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BDA2",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40569,
                "parent_id" => 40571,
                "position" => "Специалист по учету сырья и полуфабрикатов",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE00008509BFC00010A1330",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40570,
                "parent_id" => 40558,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BDA6",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40571,
                "parent_id" => 41067,
                "position" => "Специалист по учету сырья и полуфабрикатов",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE00008509B80",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40572,
                "parent_id" => 40558,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BDAA",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40573,
                "parent_id" => 40558,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BDAE",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40574,
                "parent_id" => 40558,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BD58",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40575,
                "parent_id" => 41067,
                "position" => "Специалист по учету сырья и полуфабрикатов",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE00008509F80",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40576,
                "parent_id" => 40558,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BDB2",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40577,
                "parent_id" => 40558,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BDB6",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40578,
                "parent_id" => 40845,
                "position" => "Грузчик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6EFE00008591A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40579,
                "parent_id" => 40558,
                "position" => "Грузчик",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BDBA",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40580,
                "parent_id" => 10088,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A199",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40581,
                "parent_id" => 10088,
                "position" => "Отдел выпуска ГП",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19B",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40582,
                "parent_id" => 40580,
                "position" => "Отдел изготовления песочных изделий",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A199F800021433A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40583,
                "parent_id" => 40580,
                "position" => "Отдел изготовления песочных изделий",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A199F800021433E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ], [
                "id" => 40584,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC130",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40585,
                "parent_id" => 10034,
                "position" => "Специалист ОКК",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F80002176360",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40586,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC110",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40587,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BBE",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40588,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BBA",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40589,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BB6",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40590,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BB2",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40591,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BAE",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40592,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BAA",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40593,
                "parent_id" => 51270,
                "position" => "Старший специалист ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BA6",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40594,
                "parent_id" => 51270,
                "position" => "Старший специалист ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BA2",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40595,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572B9C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40596,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572B94",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40597,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572B8C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40598,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572B84",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40599,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572B78",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40600,
                "parent_id" => 40581,
                "position" => "Руководитель Службы выпечки полуфабрикатов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF80002145720",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40601,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572B68",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40602,
                "parent_id" => 51270,
                "position" => "Руководитель отдела заливки и сборки готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572B58",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40603,
                "parent_id" => 40205,
                "position" => "Сервис консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021217A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40604,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC330",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40605,
                "parent_id" => 40581,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF80002144760",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40606,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC310",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40607,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC1F0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40608,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC1D0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40609,
                "parent_id" => 51270,
                "position" => "Холодильщик",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC1B0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40610,
                "parent_id" => 51270,
                "position" => "специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC190",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40611,
                "parent_id" => 51270,
                "position" => "Грузчик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC170",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40612,
                "parent_id" => 51270,
                "position" => "Грузчик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC150",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40613,
                "parent_id" => 10088,
                "position" => "Отдел изготовления песочных изделий",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A29B",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40614,
                "parent_id" => 40613,
                "position" => "Руководитель отдела изготовления печенья и заварных изделий ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A29BF800021453A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],

            [
                "id" => 40616,
                "parent_id" => 40613,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A29BF80002145620",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40617,
                "parent_id" => 40613,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A29BF80002145660",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40618,
                "parent_id" => 41067,
                "position" => "Кладовщик-холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE00008515A80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40619,
                "parent_id" => 41068,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F8000216322",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40620,
                "parent_id" => 41067,
                "position" => "Кладовщик-холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE00008515C80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40621,
                "parent_id" => 40613,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A29BF80002145760",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40622,
                "parent_id" => 40613,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A29BF800021457A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40623,
                "parent_id" => 10088,
                "position" => "Отдел выпечки полуфабрикатов",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A2BF",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40624,
                "parent_id" => 41067,
                "position" => "Кладовщик-холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE00008518880",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40625,
                "parent_id" => 40623,
                "position" => "Руководитель отдела выпечки полуфабрикатов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A2BFF80002146260",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40626,
                "parent_id" => 41067,
                "position" => "Кладовщик-холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE00008518A80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40627,
                "parent_id" => 40623,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A2BFF800021462E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40628,
                "parent_id" => 41067,
                "position" => "Кладовщик-холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE00008518C80",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40629,
                "parent_id" => 40623,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A2BFF80002146360",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40630,
                "parent_id" => 40623,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A2BFF800021463A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40631,
                "parent_id" => 40623,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A2BFF800021463E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40632,
                "parent_id" => 40623,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A2BFF80002146620",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40633,
                "parent_id" => 40623,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A2BFF80002146660",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40634,
                "parent_id" => 10088,
                "position" => "Отдел изготовления муссов",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A335",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40635,
                "parent_id" => 40634,
                "position" => "Руководитель отдела изготовления муссов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A335F800021466E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40636,
                "parent_id" => 41067,
                "position" => "Кладовщик-холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE00008519C80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40637,
                "parent_id" => 40634,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A335F80002146760",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40638,
                "parent_id" => 40634,
                "position" => "Руководитель Службы муссово-кремовых изделий",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A335F800021467A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40639,
                "parent_id" => 40634,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A335F800021467E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40640,
                "parent_id" => 41067,
                "position" => "Кладовщик-холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE0000851C880",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40641,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C5E8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40642,
                "parent_id" => 41067,
                "position" => "Кладовщик-холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE0000851CA80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40643,
                "parent_id" => 41067,
                "position" => "Кладовщик-холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE0000851CB80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40644,
                "parent_id" => 10069,
                "position" => "Руководитель отдела хранения и учета сырья",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE0000851D9FC00010A3990",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40645,
                "parent_id" => 10056,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F0000428E6C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40646,
                "parent_id" => 40645,
                "position" => "Грузчики",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F0000428E6FE0000851CE80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40647,
                "parent_id" => 40553,
                "position" => "отдел хранения и учета сырья",
                "status" => -1,
                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E000085059FC00010A39F0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10065,
                "parent_id" => 40647,
                "position" => "Руководитель отдела учета и хранения сырья",
                "status" => -1,
                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E000085059FC00010A39FF8000026026",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40648,
                "parent_id" => 40645,
                "position" => "Специалисты по работе с печатью эксклюзивных образцов",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F0000428E6FE0000851D880",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40649,
                "parent_id" => 10064,
                "position" => "Руководитель отдела хранения и учета сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554C80",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40650,
                "parent_id" => 40645,
                "position" => "Специалисты по работе с печатью эксклюзивных образцов",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F0000428E6FE0000851DA80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40651,
                "parent_id" => 41067,
                "position" => "Специалист по производственному учету",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE0000851DA80",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40652,
                "parent_id" => 41066,
                "position" => "Кладовщик по сырью",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F8000214772",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40653,
                "parent_id" => 41066,
                "position" => "Грузчик склада",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F8000214776",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40654,
                "parent_id" => 41066,
                "position" => "Кладовщик по сырью",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F800021477A",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40655,
                "parent_id" => 40645,
                "position" => "Специалист по работе с печатью эксклюзивных образцов",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F0000428E6FE0000851DF80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40656,
                "parent_id" => 40645,
                "position" => "Служба эксклюзивного оформления",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F0000428E6FE00008540880",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40657,
                "parent_id" => 10079,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE00008540980",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40658,
                "parent_id" => 10056,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000042A054",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40659,
                "parent_id" => 10079,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE00008540B80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40660,
                "parent_id" => 40145,
                "position" => "Грузчики",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC00010A8190",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40661,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042C2640",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40662,
                "parent_id" => 52064,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215166F0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40663,
                "parent_id" => 40999,
                "position" => "Весовщик-операционист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF80002177620",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40664,
                "parent_id" => 40145,
                "position" => "Специалист по работе с печатью эксклюзивных образцов",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC00010A8310",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40665,
                "parent_id" => 40664,
                "position" => "Специалист по обработке и печати заказов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC00010A831F8000215066",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40666,
                "parent_id" => 40664,
                "position" => "Старший специалист по обработке и печати заказов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC00010A831F800021506A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40667,
                "parent_id" => 10081,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021506E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40668,
                "parent_id" => 10081,
                "position" => "Служба эксклюзивного оформления",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215072",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40669,
                "parent_id" => 40668,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215073F000042A0EC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40670,
                "parent_id" => 10082,
                "position" => "Служба 'Шоколенд'",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40671,
                "parent_id" => 10081,
                "position" => "Отдел эксклюзивного оформления",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40672,
                "parent_id" => 10081,
                "position" => "Отдел эксклюзивной сборки",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215122",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40673,
                "parent_id" => 40671,
                "position" => "Мастер смены",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A24C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40674,
                "parent_id" => 40672,
                "position" => "Руководитель отдела эксклюзивной сборки",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215123F000042A2540",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40675,
                "parent_id" => 10081,
                "position" => "Отдел эксклюзивной лепки",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021512E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40676,
                "parent_id" => 40675,
                "position" => "Руководитель отдела",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021512FF000042A2640",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40677,
                "parent_id" => 40670,
                "position" => "Служба 'Шоколенд'",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042A26C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40678,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042A2740",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40679,
                "parent_id" => 10081,
                "position" => "Отдел по изготовлению кремов",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021513E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40680,
                "parent_id" => 40679,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021513FF000042A2C40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40681,
                "parent_id" => 40196,
                "position" => "Специалист по приему и обработке заказной продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000108997F8000211332D0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40682,
                "parent_id" => 40196,
                "position" => "Куратор доставки",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000108997F8000211332F0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40683,
                "parent_id" => 40196,
                "position" => "Специалист по обработке и печати заказов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000108997F800021133308",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40684,
                "parent_id" => 40672,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215123F000042AA6C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40685,
                "parent_id" => 40679,
                "position" => "Руководитель отдела по изготовлению кремов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021513FF000042A2EC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40686,
                "parent_id" => 40679,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021513FF000042A2F40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40687,
                "parent_id" => 40671,
                "position" => "Мастер смены",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A2FC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40688,
                "parent_id" => 40671,
                "position" => "Мастер смены",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A4440",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40689,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A44C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40690,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A4540",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40691,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A45C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40692,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A4640",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40693,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A46C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40694,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A4740",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40695,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A47C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40696,
                "parent_id" => 41066,
                "position" => "Кладовщик по сырью",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F8000215262",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40697,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A4CC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40698,
                "parent_id" => 41066,
                "position" => "Кладовщик по сырью",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F800021526A",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40699,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A4DC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40700,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A4E40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40701,
                "parent_id" => 41066,
                "position" => "Кладовщик по сырью",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F8000215276",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40702,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A4F40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40703,
                "parent_id" => 41066,
                "position" => "Кладовщик по сырью",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F800021552E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40704,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A6440",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40705,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A64C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40706,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A6540",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40707,
                "parent_id" => 41066,
                "position" => "Грузчик - дробильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F800021532E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40708,
                "parent_id" => 40671,
                "position" => "Старший специалист ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A6640",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40709,
                "parent_id" => 41066,
                "position" => "Грузчик - дробильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F8000215336",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40710,
                "parent_id" => 41066,
                "position" => "Грузчик - дробильщик",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F800021533A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40711,
                "parent_id" => 41066,
                "position" => "Грузчик - дробильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F800021533E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40712,
                "parent_id" => 41066,
                "position" => "Грузчик - дробильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F8000215362",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40713,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A6CC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40714,
                "parent_id" => 41066,
                "position" => "Оператор по обработке яиц",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F800021536A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40715,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A6DC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40716,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A6E40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40717,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A6EC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40718,
                "parent_id" => 41066,
                "position" => "Грузчик-дробильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F800021537A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40719,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A6FC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40720,
                "parent_id" => 41066,
                "position" => "Оператор по обработке яиц",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F8000215422",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40721,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A84C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40722,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A8540",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40723,
                "parent_id" => 41066,
                "position" => "Оператор по обработке яиц",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F800021542E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40724,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A8640",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40725,
                "parent_id" => 41066,
                "position" => "Кладовщик по сырью",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F8000215436",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40726,
                "parent_id" => 41066,
                "position" => "Оператор по обработке яиц",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F800021543A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40727,
                "parent_id" => 40672,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215123F000042A87C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40728,
                "parent_id" => 41066,
                "position" => "Оператор по обработке яиц",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F8000215462",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40729,
                "parent_id" => 40672,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215123F000042A8CC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40730,
                "parent_id" => 41066,
                "position" => "Оператор по обработке яиц",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F800021546A",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40731,
                "parent_id" => 41066,
                "position" => "Оператор по обработке яиц",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F800021546E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40732,
                "parent_id" => 40672,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215123F000042A8E40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40733,
                "parent_id" => 40672,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215123F000042A8EC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40734,
                "parent_id" => 40672,
                "position" => "специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215123F000042A8F40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40735,
                "parent_id" => 40672,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215123F000042A8FC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40736,
                "parent_id" => 41066,
                "position" => "Кладовщик по сырью",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F8000215522",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40737,
                "parent_id" => 10064,
                "position" => "отдел очистки сырья",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554980",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40738,
                "parent_id" => 40672,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215123F000042AA540",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40739,
                "parent_id" => 40672,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215123F000042AA5C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40740,
                "parent_id" => 40675,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021512FF000042AA640",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40741,
                "parent_id" => 40675,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021512FF000042AA6C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40742,
                "parent_id" => 40675,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021512FF000042AA740",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40743,
                "parent_id" => 40675,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021512FF000042AA7C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40744,
                "parent_id" => 40675,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021512FF000042AAC40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40745,
                "parent_id" => 40675,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021512FF000042AACC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40746,
                "parent_id" => 40675,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021512FF000042AAD40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40747,
                "parent_id" => 40675,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021512FF000042AADC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40748,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F8000215572",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40749,
                "parent_id" => 40675,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021512FF000042AAEC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40750,
                "parent_id" => 40675,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021512FF000042AAF40",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40751,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021557E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40752,
                "parent_id" => 40675,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021512FF000042AC440",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40753,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F8000215626",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40754,
                "parent_id" => 40675,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021512FF000042AC540",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40755,
                "parent_id" => 40675,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021512FF000042AC5C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40756,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F8000215632",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40757,
                "parent_id" => 40675,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021512FF000042AC6C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40758,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021563A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40759,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021563E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40760,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F8000215662",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40761,
                "parent_id" => 40675,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021512FF000042ACCC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40762,
                "parent_id" => 52064,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215166D0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40763,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021566E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40764,
                "parent_id" => 51939,
                "position" => "Оператор подготовки инвентаря",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A33758",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40765,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042ACEC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40766,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021567A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40767,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042ACFC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40768,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F8000215722",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40769,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042AE4C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40770,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021572A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40771,
                "parent_id" => 40670,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042AE5C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40772,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F8000215732",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40773,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042AE6C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40774,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021573A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40775,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042AE7C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40776,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F8000215762",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40777,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042AECC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40778,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021576A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40779,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042AEDC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40780,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F8000215772",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40781,
                "parent_id" => 40374,
                "position" => "Бухгалтер по ведению расчетов с покупателями",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF000042285C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40782,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021577A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40783,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042AEFC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40784,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F8000216022",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40785,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042C04C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40786,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021602A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40787,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021602E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40788,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042C0640",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40789,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042C06C0",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40790,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042C0740",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40791,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042C07C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40792,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042C0C40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40793,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042C0CC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40794,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042C0D40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40795,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042C0DC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40796,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042C0E40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40797,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042C0EC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40798,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021607A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40799,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021607E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40800,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F8000216122",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40801,
                "parent_id" => 10050,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B093",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40802,
                "parent_id" => 10121,
                "position" => "Сотрудники СБ",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40803,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021612E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40804,
                "parent_id" => 40802,
                "position" => "Охранник-контролер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C264",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40805,
                "parent_id" => 40802,
                "position" => "Старший смены",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C26C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40806,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021613A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40807,
                "parent_id" => 40802,
                "position" => "Старший смены",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C27C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40808,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F8000216162",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40809,
                "parent_id" => 40802,
                "position" => "Старший смены",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C2CC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40810,
                "parent_id" => 40802,
                "position" => "Охранник-контролер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C2D4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40811,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021616E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40812,
                "parent_id" => 40802,
                "position" => "Охранник-контролер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C2E4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40813,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F8000216176",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40814,
                "parent_id" => 40802,
                "position" => "Охранник-контролер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C2F4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40815,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021617E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40816,
                "parent_id" => 40802,
                "position" => "Охранник-контролер",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C444",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40817,
                "parent_id" => 40802,
                "position" => "Охранник-контролер",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C44C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40818,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021622A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40819,
                "parent_id" => 40802,
                "position" => "Охранник-контролер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C45C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40820,
                "parent_id" => 40802,
                "position" => "Охранник-контролер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C464",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40821,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F8000216236",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40822,
                "parent_id" => 40802,
                "position" => "Охранник-контролер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C474",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40823,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021623E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40824,
                "parent_id" => 40802,
                "position" => "Охранник-контролер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C4C4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40825,
                "parent_id" => 40802,
                "position" => "Охранник-контролер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C4CC",
                "department_id" => 22,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40826,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021626A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40827,
                "parent_id" => 40802,
                "position" => "Охранник-контролер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C4DC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40828,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F8000216272",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40829,
                "parent_id" => 40802,
                "position" => "Охранник-контролер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C4EC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40830,
                "parent_id" => 40802,
                "position" => "Охранник-контролер",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C4F4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40831,
                "parent_id" => 10086,
                "position" => "прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B13F0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40832,
                "parent_id" => 10086,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B1910",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40834,
                "parent_id" => 10086,
                "position" => "Служба ГП",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B1950",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40835,
                "parent_id" => 40834,
                "position" => "Руководитель службы ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40836,
                "parent_id" => 40833,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000216332",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40837,
                "parent_id" => 40836,
                "position" => "Отдел по варке полуфабрикатов",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000216333F000042C66C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40838,
                "parent_id" => 40836,
                "position" => "Склад полуфабрикатов",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000216333F000042C6740",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40839,
                "parent_id" => 40836,
                "position" => "Горячий цех",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000216333F000042C67C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40840,
                "parent_id" => 40834,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F8000216362",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40841,
                "parent_id" => 40840,
                "position" => "Отдел сборки ГП",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F8000216363F000042C6CC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40842,
                "parent_id" => 40835,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6D40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40843,
                "parent_id" => 10085,
                "position" => "прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6DC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40844,
                "parent_id" => 40835,
                "position" => "Отдел сборки ГП",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40845,
                "parent_id" => 10085,
                "position" => "Отдел по варке полуфабрикатов",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6EC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40846,
                "parent_id" => 10085,
                "position" => "Склад полуфабрикатов",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6F40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40847,
                "parent_id" => 10085,
                "position" => "горячий цех",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40848,
                "parent_id" => 40844,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E0000859088",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40849,
                "parent_id" => 40835,
                "position" => "Отдел изготовления кремов",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C84C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40850,
                "parent_id" => 40849,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C84FE00008590A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40851,
                "parent_id" => 40849,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C84FE00008590B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40852,
                "parent_id" => 40849,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C84FE00008590C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40853,
                "parent_id" => 40849,
                "position" => "Руководитель отдела",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C84FE00008590D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40854,
                "parent_id" => 40845,
                "position" => "Старший специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6EFE00008590E8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40855,
                "parent_id" => 40845,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6EFE00008590F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40856,
                "parent_id" => 40845,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6EFE0000859188",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40857,
                "parent_id" => 40845,
                "position" => "Старший специалист ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6EFE0000859198",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40858,
                "parent_id" => 40846,
                "position" => "Руководитель склада полуфабрикатов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6F7E00008591A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40859,
                "parent_id" => 40835,
                "position" => "Грузчик",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C8DC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40860,
                "parent_id" => 40858,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6F7E00008591AFC00010B239",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40861,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021217E",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40862,
                "parent_id" => 40858,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6F7E00008591AFC00010B23D",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40863,
                "parent_id" => 40858,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6F7E00008591AFC00010B23F",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40864,
                "parent_id" => 40849,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C84FE0000859488",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40865,
                "parent_id" => 40849,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C84FE0000859498",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40866,
                "parent_id" => 40858,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6F7E00008591AFC00010B295",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40867,
                "parent_id" => 40849,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C84FE00008594B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40868,
                "parent_id" => 40858,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6F7E00008591AFC00010B299",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40869,
                "parent_id" => 40849,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C84FE00008594D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40870,
                "parent_id" => 40858,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6F7E00008591AFC00010B29D",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40871,
                "parent_id" => 40858,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6F7E00008591AFC00010B29F",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40872,
                "parent_id" => 40858,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6F7E00008591AFC00010B2B1",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40873,
                "parent_id" => 40858,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6F7E00008591AFC00010B2B3",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40874,
                "parent_id" => 40858,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6F7E00008591AFC00010B2B5",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40875,
                "parent_id" => 41068,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021627E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40876,
                "parent_id" => 40847,
                "position" => "Руководитель горячего цеха",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40877,
                "parent_id" => 40847,
                "position" => "Руководитель горячего цеха",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40878,
                "parent_id" => 41067,
                "position" => "Специалист по производственному учету",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE0000851CF80",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40879,
                "parent_id" => 52064,
                "position" => "Руководитель отдела по выпечке полуфабрикатов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215166B0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40880,
                "parent_id" => 40848,
                "position" => "Старший специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085908FC00010B311",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40881,
                "parent_id" => 41074,
                "position" => "Старший специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE0000859898",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40882,
                "parent_id" => 40880,
                "position" => "Старший специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085908FC00010B311F800021662A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40883,
                "parent_id" => 41074,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE00008598B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40884,
                "parent_id" => 51565,
                "position" => "Куратор по пищевой безопасности и ТБ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B197680",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40885,
                "parent_id" => 51899,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C845728",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40886,
                "parent_id" => 40844,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E00008598E8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40887,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE00008598F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40888,
                "parent_id" => 51899,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C8456F0",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40889,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE0000859998",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40890,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212226",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40891,
                "parent_id" => 40844,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E00008599B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40892,
                "parent_id" => 40844,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E00008599C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40893,
                "parent_id" => 51565,
                "position" => "Куратор по пищевой безопасности и ТБ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B197580",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40894,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE00008599E8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40895,
                "parent_id" => 40844,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E00008599F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40896,
                "parent_id" => 40844,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E0000859C88",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40897,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE0000859C98",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40898,
                "parent_id" => 40844,
                "position" => "Старший спциалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E0000859CA8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40899,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE0000859CB8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40900,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E0000859CC8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40901,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021242A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40902,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E0000859CE8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40903,
                "parent_id" => 51899,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C845708",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40904,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E0000859D88",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40905,
                "parent_id" => 40844,
                "position" => "Оператор по контролю чек-листов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E0000859D98",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40906,
                "parent_id" => 40847,
                "position" => "Руководитель Горячего Цеха",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595F8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40907,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E0000859DB8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40908,
                "parent_id" => 51899,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C8456D0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40909,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E0000859DD8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40910,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E0000859DE8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40911,
                "parent_id" => 51899,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C84575C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40912,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C088",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40913,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C098",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40914,
                "parent_id" => 41074,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085C0A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40915,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C0B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40916,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085C0C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40917,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C0D8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40918,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085C0E8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40919,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C0F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40920,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C188",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40921,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C198",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40922,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C1A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40923,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C1B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40924,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C1C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40925,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C1D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40926,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085C1E8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40927,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085C1F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40928,
                "parent_id" => 40859,
                "position" => "Грузчик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C8DD6",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40929,
                "parent_id" => 51899,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C8456B0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40930,
                "parent_id" => 41074,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085C4A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40931,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085C4B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40932,
                "parent_id" => 41074,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085C4C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40933,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085C4D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40934,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085C4E8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40935,
                "parent_id" => 10085,
                "position" => "Руководитель отдела изготовления п/ф заготовок",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C8440",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40936,
                "parent_id" => 41074,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085C588",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40937,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C598",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40938,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085C5A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40939,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C5B8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40940,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085C5C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40941,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C5D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40942,
                "parent_id" => 41074,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085C5E8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40943,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C5F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40944,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C888",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40945,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C898",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40946,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C8A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40947,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085C8B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40948,
                "parent_id" => 52064,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021516728",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40949,
                "parent_id" => 40844,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C8D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40950,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085C8E8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40951,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C8F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40952,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085C988",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ], [
                "id" => 40953,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C998",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40954,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085D4F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40955,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085C9B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40956,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C9C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40957,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C9D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40958,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C9E8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40959,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085C9F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40960,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085CC88",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40961,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085CC98",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40962,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085CCA8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40963,
                "parent_id" => 40845,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6EFE00008591B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40964,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085CCC8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40965,
                "parent_id" => 52064,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021516718",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40966,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085CCE8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40967,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085CCF8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40968,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085CD88",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40969,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085CD98",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40970,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085CDA8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40971,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085CDB8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40972,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085CDC8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40973,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085CDD8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40974,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212222",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40975,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085CDF8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40976,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D088",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40977,
                "parent_id" => 40844,
                "position" => "Руководитель отдела сборки готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E00008600F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40978,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D0A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40979,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D0B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40980,
                "parent_id" => 40844,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D0C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40981,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D0D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40982,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D0E8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40983,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D0F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40984,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D188",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40985,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D198",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40986,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D1A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40987,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D1B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40988,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D1C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40989,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D1D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40990,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D1E8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40991,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D1F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40992,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D488",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40993,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D498",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40994,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D4A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40995,
                "parent_id" => 10034,
                "position" => "Микробиолог",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F800021752E0",
                "department_id" => 11,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40996,
                "parent_id" => 10034,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F80002175320",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40997,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085D4D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40998,
                "parent_id" => 10070,
                "position" => "прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021753A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 40999,
                "parent_id" => 51426,
                "position" => "Oтдел учета готовой продукции",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757ED",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41000,
                "parent_id" => 51426,
                "position" => "Отдел маркировки и упаковки тары",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EB",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41001,
                "parent_id" => 40999,
                "position" => "Заведующий складом",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF80002175660",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41002,
                "parent_id" => 40999,
                "position" => "Упаковщик готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF800021756A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41003,
                "parent_id" => 40999,
                "position" => "Упаковщик готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF800021756E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41004,
                "parent_id" => 40999,
                "position" => "Упаковщик готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF80002175720",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41005,
                "parent_id" => 40999,
                "position" => "Весовщик-операционист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF80002175760",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41006,
                "parent_id" => 40999,
                "position" => "Специалист по учету готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF800021757A0",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41007,
                "parent_id" => 41189,
                "position" => "Специалист по контенту",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E0000844DABC0",
                "department_id" => 14,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41008,
                "parent_id" => 40999,
                "position" => "Кладовщик готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF80002176220",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41009,
                "parent_id" => 10125,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BB3F000042EC4C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41010,
                "parent_id" => 41061,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BA2",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41011,
                "parent_id" => 40999,
                "position" => "Кладовщик-упаковщик готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF800021762E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41012,
                "parent_id" => 41010,
                "position" => "Слесарь-сантехники",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BA3F000042EC640",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41013,
                "parent_id" => 41010,
                "position" => "Оперативные дежурные",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BA3F000042EC6C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41014,
                "parent_id" => 40999,
                "position" => "Оператор по упаковке ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF800021763A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41015,
                "parent_id" => 40999,
                "position" => "Весовщик-операционист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF800021763E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41016,
                "parent_id" => 41012,
                "position" => "Слесарь-сантехник",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BA3F000042EC67E000085D988",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41017,
                "parent_id" => 40999,
                "position" => "Весовщик-операционист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF80002176660",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41018,
                "parent_id" => 52064,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021516708",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41019,
                "parent_id" => 10126,
                "position" => "Инженер-энергетик",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF000042ECDC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41020,
                "parent_id" => 40999,
                "position" => "Кладовщик готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF80002176720",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41021,
                "parent_id" => 10126,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF000042ECEC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41022,
                "parent_id" => 40999,
                "position" => "Специалист по учету готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF80002180620",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41023,
                "parent_id" => 40999,
                "position" => "Весовщик-операционист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF800021767E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41024,
                "parent_id" => 10126,
                "position" => "Мастер по ремонту",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF000042EE440",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41025,
                "parent_id" => 40999,
                "position" => "Упаковщик готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF80002177260",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41026,
                "parent_id" => 40999,
                "position" => "Кладовщик готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF800021772A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41027,
                "parent_id" => 40999,
                "position" => "Упаковщик готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF800021772E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41028,
                "parent_id" => 40999,
                "position" => "Кладовщик-упаковщик готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF80002177320",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41029,
                "parent_id" => 40999,
                "position" => "Специалист по учету готовой продукции и тары",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF80002177360",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41030,
                "parent_id" => 40536,
                "position" => "Кладовщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF000043044D7440",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41031,
                "parent_id" => 40999,
                "position" => "Весовщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF800021773E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41032,
                "parent_id" => 40999,
                "position" => "Кладовщик-упаковщик готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF80002177660",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41033,
                "parent_id" => 10126,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF000042EECC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41034,
                "parent_id" => 41000,
                "position" => "Специалист по маркировке тары",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF800021776A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41035,
                "parent_id" => 41061,
                "position" => "Прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BA6",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41036,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC3D0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41037,
                "parent_id" => 40999,
                "position" => "Упаковщик готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF800021776A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41038,
                "parent_id" => 41010,
                "position" => "Заместитель тех. директора по инженерным коммуникациям",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BA3F000042EEF40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41039,
                "parent_id" => 41000,
                "position" => "Специалист по маркировке тары",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF800021777E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41040,
                "parent_id" => 41061,
                "position" => "Главный энергетик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BBE",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41041,
                "parent_id" => 41000,
                "position" => "Специалист по маркировке тары",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF80002180260",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41042,
                "parent_id" => 41040,
                "position" => "Инженер КИП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BBEB0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41043,
                "parent_id" => 41000,
                "position" => "Старший специалист по маркировке тары",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF800021802E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41044,
                "parent_id" => 40999,
                "position" => "Оператор по упаковке готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF80002177720",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41045,
                "parent_id" => 41000,
                "position" => "Специалист по маркировке тары",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF80002180360",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41046,
                "parent_id" => 10126,
                "position" => "Мастер по ремонту производственного оборудования",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF000042EED40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41047,
                "parent_id" => 40999,
                "position" => "Оператор по упаковке готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF800021776E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41048,
                "parent_id" => 10131,
                "position" => "Старший специалист ремонтно-строительных работ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BB7F000004C8740",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41049,
                "parent_id" => 10131,
                "position" => "Специалист по РСР",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BB7F000004C86C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41050,
                "parent_id" => 41010,
                "position" => "Инженер-механик",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BA3F00004300D40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41051,
                "parent_id" => 10125,
                "position" => "Слесарь-сантехник",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BB3F000042EC540",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41052,
                "parent_id" => 51380,
                "position" => "программист 1С",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021827AF78",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41053,
                "parent_id" => 10125,
                "position" => "Слесарь-сантехник",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BB3F000042EC5C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41054,
                "parent_id" => 10125,
                "position" => "Слесарь-сантехник",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BB3F000042EC640",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41055,
                "parent_id" => 10125,
                "position" => "Слесарь-сантехник",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BB3F000042EC6C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41056,
                "parent_id" => 10126,
                "position" => "Слесарь по ремонту ПО",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF000042EEDC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41057,
                "parent_id" => 10126,
                "position" => "Слесарь по ремонту ПО",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF000042EEE40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41058,
                "parent_id" => 41040,
                "position" => "специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BBED0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41059,
                "parent_id" => 41040,
                "position" => "Оперативный дежурный",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BBEF0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41060,
                "parent_id" => 41040,
                "position" => "Специалист по электромонтажным работам ФС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BBF08",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],

            [
                "id" => 41062,
                "parent_id" => 41040,
                "position" => "Оперативный дежурный",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BBF18",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41063,
                "parent_id" => 41040,
                "position" => "Оперативный дежурный",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BBF28",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41064,
                "parent_id" => 41010,
                "position" => "Мастер по ремонту производственного оборудования",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BA3F00004302C40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41065,
                "parent_id" => 10117,
                "position" => "прочие",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F00004302CC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41066,
                "parent_id" => 40649,
                "position" => "Отдел хранения и учета сырья",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B50",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],

            [
                "id" => 41068,
                "parent_id" => 10067,
                "position" => "Отдел очистки сырья",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B90",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41069,
                "parent_id" => 52491,
                "position" => "Грузчики",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D3680",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41070,
                "parent_id" => 52493,
                "position" => "Грузчики",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D5680",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41071,
                "parent_id" => 10114,
                "position" => "Склад готовой продукции",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D10",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41072,
                "parent_id" => 10122,
                "position" => "Формировщики",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF0000430444",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41073,
                "parent_id" => 10117,
                "position" => "Гараж",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41074,
                "parent_id" => 40906,
                "position" => "Горячий цех",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41075,
                "parent_id" => 10010,
                "position" => "Менеджер по корпоративным клиентам",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021822E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41076,
                "parent_id" => 10010,
                "position" => "Менеджер по корпоративным клиентам",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F80002182320",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41077,
                "parent_id" => 10010,
                "position" => "Менеджер по корпоративным клиентам",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F80002182360",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41078,
                "parent_id" => 40196,
                "position" => "Сервис-консультант по заказной продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000108997F8000211332B0",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41079,
                "parent_id" => 41110,
                "position" => "ИТ-администратор (фабрика)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021826B2AE10",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41080,
                "parent_id" => 51274,
                "position" => "Менеджера магазина ФМ Бишкек Парк",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1185B83A0",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41081,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021233A",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41082,
                "parent_id" => 40190,
                "position" => "Руководитель Контакт-центра",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0BFC0001088BF0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41083,
                "parent_id" => 41040,
                "position" => "оперативный дежурный",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BBF38",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41084,
                "parent_id" => 40802,
                "position" => "охранник-контролер КПП",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C4FC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41085,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212136",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41086,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021213A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41087,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021213E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41088,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212162",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41089,
                "parent_id" => 51585,
                "position" => "Менеджер магазина ФМ Тоголок Молдо",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC116AF05C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41090,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021216A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41091,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021216E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41092,
                "parent_id" => 40317,
                "position" => "Уборщица фирменного магазина",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426A4C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41093,
                "parent_id" => 40293,
                "position" => "Уборщица фирменного магазина",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F8000212262",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41094,
                "parent_id" => 40293,
                "position" => "Уборщица фирменного магазина",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F8000212266",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41095,
                "parent_id" => 40293,
                "position" => "Уборщица фирменного магазина",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F800021226A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41096,
                "parent_id" => 40317,
                "position" => "Уборщик производственных и бытовых помещений",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF000042685C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41097,
                "parent_id" => 52036,
                "position" => "Оператор по упаковке продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3399DA0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41098,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D4B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41099,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D4C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41100,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D4D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41101,
                "parent_id" => 40558,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BDBE",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41102,
                "parent_id" => 40558,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BDC110",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41103,
                "parent_id" => 40558,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BDC130",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41104,
                "parent_id" => 40558,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BDC150",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41105,
                "parent_id" => 40478,
                "position" => "",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AEA80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41106,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC3F0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41107,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F8000216276",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41108,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021627A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41109,
                "parent_id" => 20137,
                "position" => "пекарь",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021106A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41110,
                "parent_id" => 51602,
                "position" => "Главный ИТ-администратор (фабрика)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021826B2AC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41111,
                "parent_id" => 41110,
                "position" => "специалист по ЦТ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021826B2ADA0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41112,
                "parent_id" => 52513,
                "position" => "Специалист по рекрутингу и адаптации",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E000084519BC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41113,
                "parent_id" => 10075,
                "position" => "Оператор Contact-centre",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0AB4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41114,
                "parent_id" => 41082,
                "position" => "Оператор Contact-centre",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0BFC0001088BFAE0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41115,
                "parent_id" => 41082,
                "position" => "Оператор Contact-centre",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0BFC0001088BFB20",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41116,
                "parent_id" => 41082,
                "position" => "Оператор Contact-centre",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0BFC0001088BFB60",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41117,
                "parent_id" => 40672,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215123F000042AA640",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41118,
                "parent_id" => 40844,
                "position" => "специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D4F8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41119,
                "parent_id" => 40844,
                "position" => "специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D588",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41120,
                "parent_id" => 40844,
                "position" => "специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D598",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41121,
                "parent_id" => 40844,
                "position" => "специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D5A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41122,
                "parent_id" => 40318,
                "position" => "мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C588",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41123,
                "parent_id" => 40318,
                "position" => "мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C598",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41124,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426864",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41125,
                "parent_id" => 40318,
                "position" => "Специалист по обработке инвентаря",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C5A8",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41126,
                "parent_id" => 40317,
                "position" => "Уборщик производственных и бытовых помещений",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF000042686C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41127,
                "parent_id" => 40317,
                "position" => "Уборщик производственных и бытовых помещений",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426874",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41128,
                "parent_id" => 40318,
                "position" => "мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C5B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41129,
                "parent_id" => 40318,
                "position" => "мойщик посуды",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C5C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41130,
                "parent_id" => 40318,
                "position" => "мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C5D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41131,
                "parent_id" => 51939,
                "position" => "Оператор подготовки инвентаря",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A33784",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41132,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004268C4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41133,
                "parent_id" => 40196,
                "position" => "Куратор доставки",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000108997F800021133318",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41134,
                "parent_id" => 40195,
                "position" => "Сервис-консультант по заказной продукции",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000108997F8000215176",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41135,
                "parent_id" => 40195,
                "position" => "Сервис-консультант по заказной продукции",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000108997F800021517A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41136,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC3B0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41137,
                "parent_id" => 51270,
                "position" => "специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC390",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41138,
                "parent_id" => 40671,
                "position" => "специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A86C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41139,
                "parent_id" => 51270,
                "position" => "Холодильщик",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC370",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41140,
                "parent_id" => 51270,
                "position" => "специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC350",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41141,
                "parent_id" => 51314,
                "position" => "Менеджер по снабжению",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE35FC0000131B968",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41142,
                "parent_id" => 40199,
                "position" => "Cпециалист по рекрутингу и адаптации ДФС",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E000084519C2D",
                "department_id" => 14,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41143,
                "parent_id" => 30140,
                "position" => "Специалист по кадровому администрированию",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EC40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41144,
                "parent_id" => 10014,
                "position" => "Гость КПП",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E0000844D98",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41145,
                "parent_id" => 52490,
                "position" => "Кладовщик склада ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786F82E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41146,
                "parent_id" => 41071,
                "position" => "Кладовщик склада ГП",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F8000213232",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41147,
                "parent_id" => 52490,
                "position" => "Кладовщик склада ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786F82A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41148,
                "parent_id" => 40675,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021512FF000042ACD40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41149,
                "parent_id" => 41131,
                "position" => "Уборщик производственных и бытовых помещений",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3378560",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41150,
                "parent_id" => 40317,
                "position" => "Уборщик производственных и бытовых помещений",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004268CC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41151,
                "parent_id" => 40317,
                "position" => "Уборщик производственных и бытовых помещений",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004268D4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41152,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004268DC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41153,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF00004268E4",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41154,
                "parent_id" => 41068,
                "position" => "Оператор по обработке яиц",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F8000216336",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41155,
                "parent_id" => 40293,
                "position" => "Уборщик ФМ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F800021226E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41156,
                "parent_id" => 52081,
                "position" => "Руководитель контент отдела",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509D30",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41157,
                "parent_id" => 51275,
                "position" => "Территориальный руководитель по ФМ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC11680",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41158,
                "parent_id" => 10075,
                "position" => "Стажер-оператор Contact centre",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0ACE",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41159,
                "parent_id" => 52489,
                "position" => "Заведующий складом ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786AD",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41160,
                "parent_id" => 40293,
                "position" => "Уборщица ФМ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F8000212272",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41161,
                "parent_id" => 40293,
                "position" => "уборщица ФМ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F8000212276",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41162,
                "parent_id" => 10075,
                "position" => "Оператор Contact centre",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0AD1",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41163,
                "parent_id" => 40844,
                "position" => "Cпециалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D5C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41164,
                "parent_id" => 40844,
                "position" => "специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D5D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41165,
                "parent_id" => 40844,
                "position" => "специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D5E8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41166,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D5F8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41167,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D888",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41168,
                "parent_id" => 40844,
                "position" => "",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D898",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41169,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D8A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41170,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D8B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41171,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D8C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41172,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D8D8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41173,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D8E8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41174,
                "parent_id" => 41067,
                "position" => "Специалист по производственному учету",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE0000851CC80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41175,
                "parent_id" => 41067,
                "position" => "",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE0000851CD80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41176,
                "parent_id" => 41066,
                "position" => "Грузчик-дробильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F8000215526",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41177,
                "parent_id" => 41067,
                "position" => "",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE0000851CE80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41178,
                "parent_id" => 51889,
                "position" => "Бариста",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC11B7080",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41179,
                "parent_id" => 10025,
                "position" => "Главный бухгалтер ООО 'Куликовский Новосибирск'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021267A0",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41180,
                "parent_id" => 10058,
                "position" => "Технолог по нормированию",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025733F000004AED7E00000980880",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41181,
                "parent_id" => 10058,
                "position" => "Технолог",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025733F000004AED7E00000980980",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41182,
                "parent_id" => 10094,
                "position" => "Директор по развитию ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B58",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41183,
                "parent_id" => 10094,
                "position" => "Руководитель Фирменной Сети 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B68",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41184,
                "parent_id" => 10094,
                "position" => "Руководитель отдела логистики 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC390",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41186,
                "parent_id" => 41185,
                "position" => "Директор ОсОО 'Семейные традиции'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5C6B",
                "department_id" => 1,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41187,
                "parent_id" => 51536,
                "position" => "Менеджер магазина ФМ Сибиряков-Гвардейцев",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC196BC",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41188,
                "parent_id" => 41066,
                "position" => "Оператор по обработке яиц",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F800021552A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41189,
                "parent_id" => 10014,
                "position" => "Руководитель направления по корпоративной культуре и коммуникациям",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E0000844DA8",
                "department_id" => 14,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41190,
                "parent_id" => 52513,
                "position" => "Менеджер по рекрутингу и адаптации",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E000084519B40",
                "department_id" => 14,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 41191,
                "parent_id" => 51314,
                "position" => "Менеджер по снабжению ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE35FC0000131B978",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51191,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021222A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51192,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021222E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51193,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212232",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51194,
                "parent_id" => 40205,
                "position" => "Официант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212236",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51195,
                "parent_id" => 40205,
                "position" => "Бариста",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021223A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51196,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021223E",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51197,
                "parent_id" => 40205,
                "position" => "Официант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212262",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51198,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212266",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51199,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021226A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51200,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021226E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51201,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212272",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51202,
                "parent_id" => 40205,
                "position" => "сервис -консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212276",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51203,
                "parent_id" => 40205,
                "position" => "сервис -консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021227A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51204,
                "parent_id" => 40205,
                "position" => "сервис -консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021227E",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51205,
                "parent_id" => 40205,
                "position" => "сервис -консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212322",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51206,
                "parent_id" => 40205,
                "position" => "сервис -консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212326",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51207,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021232E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51208,
                "parent_id" => 10034,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F800021753A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51209,
                "parent_id" => 41000,
                "position" => "Старший специалист по маркировке тары",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF80002180660",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51210,
                "parent_id" => 10072,
                "position" => "Дизайнер",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE0000844CC8",
                "department_id" => 10,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51211,
                "parent_id" => 10072,
                "position" => "Дизайнер",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE0000844CD8",
                "department_id" => 10,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51212,
                "parent_id" => 10072,
                "position" => "Дизайнер",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE0000844CE8",
                "department_id" => 10,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51213,
                "parent_id" => 52081,
                "position" => "Руководитель дизайн отдела",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509D10",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51214,
                "parent_id" => 51213,
                "position" => "Графический дизайнер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509D1580",
                "department_id" => 10,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51215,
                "parent_id" => 51601,
                "position" => "Главный бухгалтер площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021276AB",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51216,
                "parent_id" => 10048,
                "position" => "Руководитель АХС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B95",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51217,
                "parent_id" => 51535,
                "position" => "Менеджера магазина ФМ Одоевского (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC195C2",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51218,
                "parent_id" => 41183,
                "position" => "Менеджер ФМ Сибиряков-Гвардейцев (Новосибирск)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B6BC0",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51219,
                "parent_id" => 41183,
                "position" => "Менеджер ФМ Сибиряков-Гвардейцев (Новосибирск)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B6C20",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51220,
                "parent_id" => 41183,
                "position" => "Менеджер ФМ Сибиряков-Гвардейцев (Новосибирск)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B6C60",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51221,
                "parent_id" => 41183,
                "position" => "Менеджер ФМ Сибиряков-Гвардейцев (Новосибирск)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B6CA0",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51222,
                "parent_id" => 41183,
                "position" => "Менеджер ФМ Сибиряков-Гвардейцев (Новосибирск)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B6CE0",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51223,
                "parent_id" => 41183,
                "position" => "Менеджер ФМ Сибиряков-Гвардейцев (Новосибирск)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B6D10",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51224,
                "parent_id" => 41183,
                "position" => "Менеджер ФМ Сибиряков-Гвардейцев (Новосибирск)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B6D30",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51225,
                "parent_id" => 41183,
                "position" => "Менеджер магазина Сибиряков-Гвардейцев (Новосибирск)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B6D50",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51226,
                "parent_id" => 41183,
                "position" => "Менеджер Сибиряков-Гвардейцев (Новосиб)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B6D70",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51227,
                "parent_id" => 41183,
                "position" => "Менеджер Сибиряков-Гвардейцев ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B6D90",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51228,
                "parent_id" => 41183,
                "position" => "Менеджер Сибиряков-Гвардейцев ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B6DB0",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51229,
                "parent_id" => 41183,
                "position" => "Менеджер ФМ Сибиряков-Гвардейцев ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B6DD0",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51230,
                "parent_id" => 41179,
                "position" => "Бухгалтер ФС ООО 'Куликовский Новосибирск'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021267AB",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51231,
                "parent_id" => 41082,
                "position" => "Супервайзер Contact centre",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0BFC0001088BFAA0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51232,
                "parent_id" => 51385,
                "position" => "дезинфектор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B958630",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51233,
                "parent_id" => 10034,
                "position" => "",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F800021753E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51234,
                "parent_id" => 10034,
                "position" => "",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F80002175620",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51235,
                "parent_id" => 10034,
                "position" => "специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F80002175660",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51236,
                "parent_id" => 10034,
                "position" => "специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F800021756A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51237,
                "parent_id" => 10034,
                "position" => "специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F800021756E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51238,
                "parent_id" => 10034,
                "position" => "специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F80002175720",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51239,
                "parent_id" => 10034,
                "position" => "специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F80002175760",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51240,
                "parent_id" => 10034,
                "position" => "специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F800021757A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51241,
                "parent_id" => 10034,
                "position" => "Медицинская сестра КДК",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F800021757E0",
                "department_id" => 11,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51242,
                "parent_id" => 51536,
                "position" => "Менеджер магазина ФМ Советская (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC196C2",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51243,
                "parent_id" => 51536,
                "position" => "Менеджер магазина ФМ Кирова (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC196E088",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51244,
                "parent_id" => 51899,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C845754",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51245,
                "parent_id" => 40318,
                "position" => "мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C898",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51246,
                "parent_id" => 40318,
                "position" => "мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C8A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51247,
                "parent_id" => 41000,
                "position" => "Специалист по маркировке тары",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF800021806E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51248,
                "parent_id" => 41000,
                "position" => "Специалист по маркировке тары",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF80002180720",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51249,
                "parent_id" => 41000,
                "position" => "специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF80002180760",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51250,
                "parent_id" => 41000,
                "position" => "Весовщик-операционист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF800021807A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51251,
                "parent_id" => 41000,
                "position" => "Специалист по маркировке тары",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF800021807E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],

            [
                "id" => 51253,
                "parent_id" => 51313,
                "position" => "Менеджер по персоналу  Куликовский Новосибирск",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444FDB0",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51254,
                "parent_id" => 10126,
                "position" => "Слесарь по ремонту ПО",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF000042EEEC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51255,
                "parent_id" => 10126,
                "position" => "Слесарь по ремонту ПО",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF000042EEF40",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51256,
                "parent_id" => 10126,
                "position" => "Слесарь по ремонту ПО",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF000042EEFC0",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51257,
                "parent_id" => 10126,
                "position" => "Слесарь по ремонту ПО",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF00004300440",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51258,
                "parent_id" => 10126,
                "position" => "Слесарь по ремонту ПО",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF000043004C0",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51259,
                "parent_id" => 10126,
                "position" => "Слесарь по ремонту ПО",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF00004300540",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51260,
                "parent_id" => 10126,
                "position" => "Слесарь по ремонту ПО",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF000043005C0",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51261,
                "parent_id" => 10126,
                "position" => "Слесарь по ремонту ПО",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF00004300640",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51262,
                "parent_id" => 10126,
                "position" => "Слесарь по ремонту ПО",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF000043006C0",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51263,
                "parent_id" => 10126,
                "position" => "Слесарь по ремонту ПО",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF00004300740",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51264,
                "parent_id" => 41061,
                "position" => "Менеджер по СМР ФС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BC150",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51265,
                "parent_id" => 10119,
                "position" => "Отдел хранения",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990EAE5",
                "department_id" => 0,
                "register_contacts" => 51265,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51266,
                "parent_id" => 41184,
                "position" => "Отдел хранения",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC39940",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51267,
                "parent_id" => 10119,
                "position" => "Департамент снабжения",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990EAE3",
                "department_id" => 0,
                "register_contacts" => 51267,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51269,
                "parent_id" => 40581,
                "position" => "Руководитель Отдела выпуска ГП",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF80002145760",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51270,
                "parent_id" => 40600,
                "position" => "Отдел выпуска ГП",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572B",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51271,
                "parent_id" => 40476,
                "position" => "Отдел изготовления продукции для Бейкери",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A33978",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51274,
                "parent_id" => 51321,
                "position" => "Менеджеры ФМ",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1185A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51275,
                "parent_id" => 51579,
                "position" => "Офис ДФС",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC110",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51276,
                "parent_id" => 51274,
                "position" => "Менеджер магазина ФМ ГУМ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1185B86A0",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51277,
                "parent_id" => 51274,
                "position" => "Менеджер магазина ФМ ГУМ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1185B86E0",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51278,
                "parent_id" => 51274,
                "position" => "Менеджер магазина ФМ ГУМ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1185B8720",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51279,
                "parent_id" => 51274,
                "position" => "Менеджер магазина ФМ ГУМ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1185B8760",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51280,
                "parent_id" => 51274,
                "position" => "Менеджер магазина ФМ ГУМ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1185B87A0",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51281,
                "parent_id" => 51585,
                "position" => "Менеджер магазина ФМ ГУМ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC116AF06C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ], [
                "id" => 51282,
                "parent_id" => 40318,
                "position" => "",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C8B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51283,
                "parent_id" => 40858,
                "position" => "специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6F7E00008591AFC00010B2B7",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51284,
                "parent_id" => 51536,
                "position" => "Менеджер магазина ФМ Троллейная (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC196D5",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51285,
                "parent_id" => 51536,
                "position" => "Менеджер магазина ФМ Челюскинцев (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC196C6",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51286,
                "parent_id" => 10094,
                "position" => "Технический менеджер 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B84",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51287,
                "parent_id" => 10094,
                "position" => "Brand-маркетолог «Куликовский Новосибирск» ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B8C",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51288,
                "parent_id" => 51320,
                "position" => "Менеджер по планированию производства и продаж площадки Ауэзова",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5C6D84",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51289,
                "parent_id" => 10034,
                "position" => "Инженер-микробиолог",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F80002176260",
                "department_id" => 11,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51290,
                "parent_id" => 51618,
                "position" => "Руководитель производства площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AC",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51291,
                "parent_id" => 51320,
                "position" => "Технолог площадки Ауэзова",
                "status" => -1,
                "is_department" => 0,
                "hid" => "0x5C6D8C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 10051,
                "parent_id" => 51320,
                "position" => "Руководитель службы охраны площадки Ауэзова",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5C6DC110",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51292,
                "parent_id" => 51320,
                "position" => "Главный инженер площадки Ауэзова",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5C6DAA",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51293,
                "parent_id" => 51616,
                "position" => "Менеджер R&D площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DB6D0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51294,
                "parent_id" => 40158,
                "position" => "Бухгалтер по СНТ и ЭСФ ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084458E0980",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51295,
                "parent_id" => 51215,
                "position" => "Бухгалтер по производству площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021276AB58",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51296,
                "parent_id" => 51607,
                "position" => "Старший заведующий складом площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6D861580",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51297,
                "parent_id" => 41066,
                "position" => "Кладовщик по сырью",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F8000215532",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51298,
                "parent_id" => 51619,
                "position" => "Заведующий лабораторией площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB6AC",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51299,
                "parent_id" => 51536,
                "position" => "Менеджер магазина ФМ «Новосибирская»",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC196CA",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51300,
                "parent_id" => 10029,
                "position" => "Помощник аудитора",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE0000844C8B56",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51301,
                "parent_id" => 41074,
                "position" => "специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085D588",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51302,
                "parent_id" => 51270,
                "position" => "холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC910",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51303,
                "parent_id" => 40318,
                "position" => "мойщик посуды",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C8C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51304,
                "parent_id" => 10058,
                "position" => "Инженер-технолог",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025733F000004AED7E00000980A80",
                "department_id" => 13,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51305,
                "parent_id" => 10058,
                "position" => "Технолог по сырью",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025733F000004AED7E00000980B80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51306,
                "parent_id" => 51585,
                "position" => "Менеджера магазина ФМ Ландыш",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC116AEB8",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51307,
                "parent_id" => 40374,
                "position" => "Материальный бухгалтер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF00004226EC",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51308,
                "parent_id" => 40374,
                "position" => "Материальный бухгалтер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF00004226DC",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51309,
                "parent_id" => 10129,
                "position" => "специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021826B2AD7180",
                "department_id" => 7,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51310,
                "parent_id" => 10128,
                "position" => "Сотрудник",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF80002182760",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51311,
                "parent_id" => 51535,
                "position" => "Менеджер магазина ФМ Дзержинского (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC195B4",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51312,
                "parent_id" => 52469,
                "position" => "Ведущий юрист ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444DAC0",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51313,
                "parent_id" => 40155,
                "position" => "Руководитель Отдела HR",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444F8",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51314,
                "parent_id" => 10118,
                "position" => "Менеджер по снабжению",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE35FC0000131B9",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51315,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC930",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51316,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC950",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51317,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC970",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51318,
                "parent_id" => 51939,
                "position" => "Специалист по подготовке  инвентаря",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3378C",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51319,
                "parent_id" => 51535,
                "position" => "Менеджер ФМ Гоголя (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC195AC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],

            [
                "id" => 51321,
                "parent_id" => 51275,
                "position" => "Территориальный руководитель по ФМ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC11840",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51322,
                "parent_id" => 51535,
                "position" => "Менеджер магазина ФМ Высоцкого (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC195BC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51323,
                "parent_id" => 51536,
                "position" => "Менеджер магазина ФМ Ленина (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC196AC",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51324,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426A44",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51325,
                "parent_id" => 40374,
                "position" => " Материальный Бухгалтер",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF00004226E4",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51326,
                "parent_id" => 52081,
                "position" => "Руководитель отдела аналитики",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509D90",
                "department_id" => 10,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51327,
                "parent_id" => 52081,
                "position" => "Менеджер по продукту",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0980",
                "department_id" => 10,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51328,
                "parent_id" => 41069,
                "position" => "грузчик склада МО",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D36C2",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51329,
                "parent_id" => 40158,
                "position" => "Бухгалтер ФС 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084458E0880",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51330,
                "parent_id" => 51535,
                "position" => "Менеджер магазина ФМ Ильича (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC195C6",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51331,
                "parent_id" => 51320,
                "position" => "HR-менеджер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6D78",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51332,
                "parent_id" => 51293,
                "position" => "Руководитель производства площадки Ауэзова",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5C6DB6D580",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51333,
                "parent_id" => 51617,
                "position" => "Руководитель производства площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51334,
                "parent_id" => 51617,
                "position" => "Ведущий инженер технолог площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAD0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51335,
                "parent_id" => 51320,
                "position" => "Менеджер по развитию площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6D58",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51336,
                "parent_id" => 10025,
                "position" => "Помощник бухгалтера розничной сети",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F80002127220",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51337,
                "parent_id" => 10025,
                "position" => "Помощник бухгалтера розничной сети",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F80002127260",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51338,
                "parent_id" => 10025,
                "position" => "Помощник бухгалтера розничной сети",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021272A0",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51339,
                "parent_id" => 10025,
                "position" => "Помощник бухгалтера розничной сети",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021272E0",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51340,
                "parent_id" => 41061,
                "position" => "Проектный менеджер",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BC110",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51341,
                "parent_id" => 51313,
                "position" => "Менеджер по персоналу 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444FD90",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51342,
                "parent_id" => 30140,
                "position" => "HR-специалист ТОО Куликовский Казахстан",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304ED40",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51343,
                "parent_id" => 20135,
                "position" => "Супервайзер ЗТШ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B9",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51344,
                "parent_id" => 51627,
                "position" => "Мастер производственного цеха площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AE7580",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51345,
                "parent_id" => 51313,
                "position" => "Специалист по охране труда Куликовский Новосибирск",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444FDD0",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51346,
                "parent_id" => 40311,
                "position" => "Операционист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021223FF0000424664",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51347,
                "parent_id" => 40158,
                "position" => "Старший программист 1С ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084458E0B80",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51348,
                "parent_id" => 10128,
                "position" => "Отдел программной разработки и поддержки",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C8FC00010891FF800021827A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51349,
                "parent_id" => 52506,
                "position" => "Руководитель отдела веб-разработки",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021827EB",
                "department_id" => 7,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51350,
                "parent_id" => 51536,
                "position" => "Менеджер магазина ФМ Кропоткина (Новосибирск)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC196B4",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51351,
                "parent_id" => 51536,
                "position" => "Менеджер магазина ФМ Большая (Новосибирск)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC196D1",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51352,
                "parent_id" => 51453,
                "position" => "Бухгалтер по ФС ООО «Куликовский Новосибирск»",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021273EB68",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51353,
                "parent_id" => 40155,
                "position" => "Директор департамента логистики ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444E8",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51354,
                "parent_id" => 10036,
                "position" => "оперативный дежурный",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BBAB0",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51356,
                "parent_id" => 51604,
                "position" => "Офис - менеджер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991AD9580",
                "department_id" => 1,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51357,
                "parent_id" => 51579,
                "position" => "Руководитель направления категорий",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDAA",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51358,
                "parent_id" => 10094,
                "position" => "Бранч-менеджер 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC330",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51359,
                "parent_id" => 51535,
                "position" => "Менеджер ФМ Краснообск рынок (Новосибирск)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC195CE",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51360,
                "parent_id" => 41082,
                "position" => "Оператор Contact centre",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0BFC0001088BFA60",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51361,
                "parent_id" => 51402,
                "position" => "Руководитель Фирменной Сети ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF640",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51362,
                "parent_id" => 51314,
                "position" => "Менеджер по снабжению",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE35FC0000131B958",
                "department_id" => 12,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51363,
                "parent_id" => 10115,
                "position" => "Аналитик  ТМЦ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F8000212762B9D6B",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51364,
                "parent_id" => 41110,
                "position" => "ИТ-администратор (фабрика)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021826B2ADE0",
                "department_id" => 7,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51365,
                "parent_id" => 51663,
                "position" => "Заведующий складом площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6D8615B5A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51366,
                "parent_id" => 40158,
                "position" => "Бухгалтер фирменной сети ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084458E0A80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51367,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021233E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51368,
                "parent_id" => 40205,
                "position" => "Бариста",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212362",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51369,
                "parent_id" => 51889,
                "position" => "Бариста",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC11B7380",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51370,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021236A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51371,
                "parent_id" => 40205,
                "position" => "Официант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021236E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51372,
                "parent_id" => 40293,
                "position" => "Клининг-специалист ФМ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F800021227E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51373,
                "parent_id" => 10117,
                "position" => "Водитель - экспедитор",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F0000430454",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51374,
                "parent_id" => 40507,
                "position" => "Руководитель ночной смены",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADE0",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51375,
                "parent_id" => 41073,
                "position" => "Водитель - экспедитор",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DDA80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51376,
                "parent_id" => 40156,
                "position" => "Водитель - экспедитор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DD8B4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51377,
                "parent_id" => 40802,
                "position" => "Сотрудник СБ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C644",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51378,
                "parent_id" => 10121,
                "position" => "Оператор видеомониторинга",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51379,
                "parent_id" => 51348,
                "position" => "Руководитель отдела программной разработки и поддержки",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021827AD",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51380,
                "parent_id" => 51348,
                "position" => "Руководитель отдела программной разработки и поддержки",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021827AF",
                "department_id" => 7,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51381,
                "parent_id" => 40512,
                "position" => "Дворник",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586AC20",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51382,
                "parent_id" => 51381,
                "position" => "Дворник",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586AC3080",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51383,
                "parent_id" => 51381,
                "position" => "Дворник",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586AC3180",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51384,
                "parent_id" => 40512,
                "position" => "Бригадир ",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACA0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51385,
                "parent_id" => 51216,
                "position" => "Руководитель отдела уборки и санитарной обработки",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9584",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51386,
                "parent_id" => 51385,
                "position" => "Бригадир ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B958610",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51387,
                "parent_id" => 51385,
                "position" => "Бригадир ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B958688",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51388,
                "parent_id" => 51385,
                "position" => "Бригадир службы клининга",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51389,
                "parent_id" => 51216,
                "position" => "Кладовщик склада АХС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B958C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51390,
                "parent_id" => 51216,
                "position" => "Дворник",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9594",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51391,
                "parent_id" => 51390,
                "position" => "Дворник",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B959560",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51392,
                "parent_id" => 51390,
                "position" => "Дворник",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9595A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51393,
                "parent_id" => 51390,
                "position" => "Дворник",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9595E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51394,
                "parent_id" => 51216,
                "position" => "Прачка",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B959C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51395,
                "parent_id" => 51394,
                "position" => "прачка",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B959EB8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51396,
                "parent_id" => 51394,
                "position" => "прачка",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B959EA8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51397,
                "parent_id" => 51394,
                "position" => "прачка",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B959E98",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51398,
                "parent_id" => 51394,
                "position" => "прачка",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B959E88",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51399,
                "parent_id" => 51394,
                "position" => "прачка",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B959E70",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51400,
                "parent_id" => 51579,
                "position" => "Менеджер направления бранч",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDA6",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51401,
                "parent_id" => 51453,
                "position" => "Бухгалтер ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021273EB58",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51402,
                "parent_id" => 51404,
                "position" => "Заместитель директора фирменной сети ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACE0",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51403,
                "parent_id" => 30140,
                "position" => "Категорийный менеджер ФС ТОО 'Куликовский Казахстан'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304E4C0",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51404,
                "parent_id" => 40155,
                "position" => "Директор Фирменной Сети ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444A8",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51405,
                "parent_id" => 51402,
                "position" => "Территориальный руководитель ФС ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF180",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51406,
                "parent_id" => 40155,
                "position" => "Руководитель производства ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EE56",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51407,
                "parent_id" => 30139,
                "position" => "Технический менеджер",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084459FC000108911",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51408,
                "parent_id" => 51473,
                "position" => "Менеджер технического снабжения",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE75AC0",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51409,
                "parent_id" => 30139,
                "position" => "Специалист холодильного оборудования ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084459FC000108913",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51410,
                "parent_id" => 10034,
                "position" => "Микробиолог",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F800021762A0",
                "department_id" => 11,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51414,
                "parent_id" => 10115,
                "position" => "Аналитик ТМЦ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F8000212762B9D6D",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51415,
                "parent_id" => 40188,
                "position" => "Финансовый Аналитик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F8000212762B8C",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51416,
                "parent_id" => 30139,
                "position" => "Специалист по строительным работам ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084459FC000108915",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51417,
                "parent_id" => 30139,
                "position" => "Специалист холодильного оборудования /АХО/  - ТОО",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084459FC000108917",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51418,
                "parent_id" => 30139,
                "position" => "Электрик /АХО/ ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084459FC000108919",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51419,
                "parent_id" => 30139,
                "position" => "Специалист по строительным работам  ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084459FC00010891B",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51420,
                "parent_id" => 30139,
                "position" => "Электрик АХО ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084459FC00010891D",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51421,
                "parent_id" => 10015,
                "position" => "Юрист Компании",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009918AFE0000844588",
                "department_id" => 27,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51422,
                "parent_id" => 51453,
                "position" => "Бухгалтер-ревизор ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021273EB78",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51423,
                "parent_id" => 51535,
                "position" => "Менеджер ФМ Кубовая",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC195D3",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51424,
                "parent_id" => 52081,
                "position" => "Менеджер по продукту",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509AC0",
                "department_id" => 10,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51425,
                "parent_id" => 41067,
                "position" => "Специалист по производственному учету",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE0000851D880",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51426,
                "parent_id" => 10070,
                "position" => "Заместитель руководителя СУГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51427,
                "parent_id" => 41000,
                "position" => "Специалист по маркировке тары",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF800021812A0",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51428,
                "parent_id" => 41000,
                "position" => "Специалист по маркировке тары",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF800021812E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51429,
                "parent_id" => 41000,
                "position" => "Специалист по маркировке тары",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF80002181320",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51430,
                "parent_id" => 41000,
                "position" => "Специалист по маркировке тары",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF80002181360",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51431,
                "parent_id" => 41000,
                "position" => "Специалист по маркировке тары",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF800021813A0",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51432,
                "parent_id" => 41000,
                "position" => "Специалист по маркировке тары",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF800021813E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51433,
                "parent_id" => 40999,
                "position" => "Оператор по упаковке готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF80002177760",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51434,
                "parent_id" => 40999,
                "position" => "Оператор по упаковке готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF800021777A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51435,
                "parent_id" => 40999,
                "position" => "Оператор по упаковке готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF800021777E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51436,
                "parent_id" => 40999,
                "position" => "Кладовщик-упаковщик готовой продукции",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF80002180220",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51437,
                "parent_id" => 40999,
                "position" => "Кладовщик-упаковщик готовой продукции",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF80002180260",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51438,
                "parent_id" => 40999,
                "position" => "Кладовщик-упаковщик готовой продукции",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF800021802A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51439,
                "parent_id" => 40999,
                "position" => "Кладовщик-упаковщик готовой продукции",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF800021802E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51440,
                "parent_id" => 40999,
                "position" => "Кладовщик-упаковщик готовой продукции",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF80002180320",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51441,
                "parent_id" => 40430,
                "position" => "Заведующий складом",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786AB68",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51442,
                "parent_id" => 52489,
                "position" => "Заведующий складом ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786AF",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51443,
                "parent_id" => 41073,
                "position" => "Водитель - экспедитор",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8AD7F000043044FE000084DDC80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51444,
                "parent_id" => 51484,
                "position" => "Куратор 'ФС Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BBB28",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51445,
                "parent_id" => 51484,
                "position" => "Куратор ФС 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BBB18",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51446,
                "parent_id" => 51484,
                "position" => "Сервис-менеджер 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BBB08",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51447,
                "parent_id" => 10094,
                "position" => "Системный Администратор 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B94",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51448,
                "parent_id" => 10094,
                "position" => "Системный Администратор 'Куликовский Новосибирск'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B9C",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51449,
                "parent_id" => 10094,
                "position" => "Системный Администратор 'Куликовский Новосибирск'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BA2",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51450,
                "parent_id" => 10094,
                "position" => "Системный Администратор 'Куликовский Новосибирск'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BA6",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51451,
                "parent_id" => 10094,
                "position" => "Системный Администратор 'Куликовский Новосибирск'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BAA",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51452,
                "parent_id" => 10094,
                "position" => "Системный Администратор 'Куликовский Новосибирск'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BAE",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51453,
                "parent_id" => 51596,
                "position" => "Главный бухгалтер ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021273EB",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51454,
                "parent_id" => 40205,
                "position" => "Бариста",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212372",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51455,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212376",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51456,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021237A",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51457,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021237E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51458,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212422",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51459,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212426",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51460,
                "parent_id" => 52198,
                "position" => "Супервайзер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990CB5E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51461,
                "parent_id" => 52198,
                "position" => "Мерчендайзер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990CB61",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51462,
                "parent_id" => 52198,
                "position" => "Мерчендайзер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990CB63",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51463,
                "parent_id" => 51535,
                "position" => "Менеджер ФМ Гребенщикова (Новосибирск)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC195CA",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51464,
                "parent_id" => 10034,
                "position" => "Лаборант хим-бак. анализов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F800021762E0",
                "department_id" => 11,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51465,
                "parent_id" => 10038,
                "position" => "Отдел продаж",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990C8",
                "department_id" => 0,
                "register_contacts" => 51465,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51466,
                "parent_id" => 41082,
                "position" => "Оператор Contact centre",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0BFC0001088BF940",
                "department_id" => 10,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51467,
                "parent_id" => 51611,
                "position" => "Главный инженер площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DB2B0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51468,
                "parent_id" => 51535,
                "position" => "Менеджер ФМ Выборная (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC195D5",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51469,
                "parent_id" => 51313,
                "position" => "Специалист по подбору персонала ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444FAC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51470,
                "parent_id" => 51535,
                "position" => "Менеджер ФМ Богаткова (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC195D7",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51471,
                "parent_id" => 51536,
                "position" => "Менеджер ФМ Громова (Новосибирск)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC196CE",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51472,
                "parent_id" => 41110,
                "position" => "ИТ-специалист (ФСБ)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021826B2AE30",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51473,
                "parent_id" => 51986,
                "position" => "Руководитель отдела  технического снабжения",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE758",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51474,
                "parent_id" => 10036,
                "position" => "Специалист по системам ХО",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BBAD0",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51475,
                "parent_id" => 51536,
                "position" => "Менеджер ФМ 'Плановая' (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC196D3",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51476,
                "parent_id" => 51535,
                "position" => "Менеджер ФМ Краснообск центр (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC195D1",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51477,
                "parent_id" => 51473,
                "position" => "Менеджер технического снабжения",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE75B40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51478,
                "parent_id" => 51473,
                "position" => "Менеджер технического снабжения",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE75BC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51479,
                "parent_id" => 41069,
                "position" => "грузчик склада МО",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D36B4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51480,
                "parent_id" => 41082,
                "position" => "Оператор Contact centre",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0BFC0001088BF9C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51481,
                "parent_id" => 10094,
                "position" => "Территориальный руководитель ФС Новосибирск",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BB2",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51482,
                "parent_id" => 10094,
                "position" => "Территориальный руководитель ФС",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BB6",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51483,
                "parent_id" => 40162,
                "position" => "Региональный ревизор",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021112AB",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51484,
                "parent_id" => 10094,
                "position" => "Руководитель ФС НСК",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BBA",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51485,
                "parent_id" => 51608,
                "position" => "Специалист отдела планирования и аналитики площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6D867580",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51486,
                "parent_id" => 51292,
                "position" => "Инженер",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5C6DAAD0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51487,
                "parent_id" => 10114,
                "position" => "Менеджер Отдела Хранения",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56C20",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51488,
                "parent_id" => 51402,
                "position" => "Менеджера магазинов",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51489,
                "parent_id" => 51488,
                "position" => "Менеджера магазина ФМ Шаляпина",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F26C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51490,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Фурманова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6DA",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51491,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Grand Park",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6DE",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51492,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Туркебаева",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6E1",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51493,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ MART Village",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6E3",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51494,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Толе Би",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6E5",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51495,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Абая",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6E7",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51496,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Айнабулак",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6E880",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51497,
                "parent_id" => 51488,
                "position" => "Менеджер магазина Аксай - 2",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6E980",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51498,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Алмагуль",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6EA80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51499,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Думан",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6EB80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51500,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Жандосова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6EC80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51501,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Жетысу",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6ED80",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51502,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Жибек Жолы ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6EE80",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51503,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Казахфильм",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6EF80",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51504,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Каменка",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F044",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51505,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Каскелен",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F04C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51506,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Кокжиек",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F054",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51507,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Макатаева",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F05C",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51508,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Мендикулова ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F064",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51509,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Мерей",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F06C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51510,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Каскелен",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F074",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51511,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Рыскулова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F07C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51512,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Саина",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F0C4",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51513,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Сары-Арка ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F0CC",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51514,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Сатпаева",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F0D4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51515,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Северное Кольцо",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F0DC",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51516,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Сейфуллина",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F0E4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51517,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Спутник",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F0EC",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51518,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Талдыкорган «Даулет»",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F0F4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51519,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ  Тимирязева",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F0FC",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51520,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Боролдай",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F244",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51521,
                "parent_id" => 40161,
                "position" => "Инженер холодильного оборудования ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084459FC00010889358",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51522,
                "parent_id" => 51453,
                "position" => "Заместитель главного бухгалтера ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021273EB84",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51523,
                "parent_id" => 51453,
                "position" => "Бухгалтер по учету заработной ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021273EB8C",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51524,
                "parent_id" => 51453,
                "position" => "Программист 1С  ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021273EB94",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51525,
                "parent_id" => 51617,
                "position" => "Менеджер ISO площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAF0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51526,
                "parent_id" => 41082,
                "position" => "Оператор Contact centre",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0BFC0001088BFA20",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51527,
                "parent_id" => 10034,
                "position" => "Специалист по контролю качества (ГП)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F80002176320",
                "department_id" => 11,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51528,
                "parent_id" => 30141,
                "position" => "Маркетолог по внутренним коммуникациям ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444BFC0001088B1",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51529,
                "parent_id" => 51361,
                "position" => "Куратор Фрменной Сети ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF65E",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51530,
                "parent_id" => 51287,
                "position" => "Маркетолог",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B8DA0",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51531,
                "parent_id" => 51287,
                "position" => "Branch маркетолог 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B8DE0",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51532,
                "parent_id" => 10094,
                "position" => "Категорийный менеджер ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BBE",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51533,
                "parent_id" => 51532,
                "position" => "Тренер по кофе ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BBEB0",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51534,
                "parent_id" => 10058,
                "position" => "Технолог по нормированию",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025733F000004AED7E00000980C80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51535,
                "parent_id" => 51708,
                "position" => "Менеджеры ФМ НСК",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC19580",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51536,
                "parent_id" => 51708,
                "position" => "Менеджеры ФМ НСК",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC19680",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51537,
                "parent_id" => 51453,
                "position" => "Старший бухгалтер  НСК",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021273EBA2",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51538,
                "parent_id" => 40293,
                "position" => "Уборщица ФМ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F8000212326",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51539,
                "parent_id" => 40293,
                "position" => "Уборщица ФМ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F800021232A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51540,
                "parent_id" => 51357,
                "position" => "Тренер кофейного направления ФС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDAAB0",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51541,
                "parent_id" => 51357,
                "position" => "Тренер кофейного направления ФС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDAAD0",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51542,
                "parent_id" => 51275,
                "position" => "Тренер по кофе",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC11A20",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51544,
                "parent_id" => 51543,
                "position" => "Директор ООО 'Куликовский Новосибирск'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D1580",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51545,
                "parent_id" => 51453,
                "position" => "Бухгалтер-ревизор ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021273EBA6",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51546,
                "parent_id" => 20135,
                "position" => "Специалист по делопроизводству ЗТШ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2BD",
                "department_id" => 14,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51547,
                "parent_id" => 10014,
                "position" => "Специалист по рекрутингу и адаптации",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E0000844DD8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51548,
                "parent_id" => 40146,
                "position" => "Зав. складом ГП",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786B0FC00010939F0",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51549,
                "parent_id" => 52490,
                "position" => "Кладовщик склада ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786F826",
                "department_id" => 5,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51550,
                "parent_id" => 52490,
                "position" => "Кладовщик склада ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786F822",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51551,
                "parent_id" => 52490,
                "position" => "Кладовщик склада ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786F7C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51552,
                "parent_id" => 52490,
                "position" => "Кладовщик склада ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D1F800021276786F740",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51553,
                "parent_id" => 41069,
                "position" => "Грузчик склада МО",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D36AC",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51554,
                "parent_id" => 41069,
                "position" => "Грузчик склада МО",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D36C6",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51555,
                "parent_id" => 52494,
                "position" => "Заведующий центральным складом",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D55BC",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51556,
                "parent_id" => 41069,
                "position" => "Грузчик ЦС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D36CA",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51557,
                "parent_id" => 10122,
                "position" => "Кладовщики",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF000043044C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51558,
                "parent_id" => 41072,
                "position" => "Формировщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF0000430447E00008504F80",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51560,
                "parent_id" => 10131,
                "position" => "Специалист по РСР",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BB7F000004C87C0",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51561,
                "parent_id" => 10036,
                "position" => "Слесарь по вентиляционным работам",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BBAF0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51562,
                "parent_id" => 51385,
                "position" => "Руководитель службы клининга",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586C8",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51563,
                "parent_id" => 51390,
                "position" => "Дворник",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B959610",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51564,
                "parent_id" => 52198,
                "position" => "Мерчендайзер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990CB5A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51565,
                "parent_id" => 10086,
                "position" => "Мастера смен",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B1970",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51566,
                "parent_id" => 40858,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6F7E00008591AFC00010B2B9",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51567,
                "parent_id" => 10025,
                "position" => "Внутренний контролер ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021273A0",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51568,
                "parent_id" => 10058,
                "position" => "Технолог производственных цехов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025733F000004AED7E00000980D80",
                "department_id" => 13,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51569,
                "parent_id" => 10064,
                "position" => "Отдел по учету времени рабочих процессов",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554E80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51570,
                "parent_id" => 10064,
                "position" => "Отдел по учету времени рабочих процессов",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554F80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51571,
                "parent_id" => 51570,
                "position" => "Оператор по учету времени рабочих процессов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554FAC",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51572,
                "parent_id" => 51570,
                "position" => "Оператор по учету времени рабочих процессов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554FB4",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51573,
                "parent_id" => 51570,
                "position" => "Оператор по учету времени рабочих процессов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554FBC",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51574,
                "parent_id" => 51402,
                "position" => "Тренер по кофе ФС ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF5C0",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51575,
                "parent_id" => 40168,
                "position" => "Менеджер по снабжению ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444EB5A",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51576,
                "parent_id" => 51528,
                "position" => "Маркетолог по внешним коммуникациям ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444BFC0001088B178",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51577,
                "parent_id" => 51453,
                "position" => "Бухгалтер по ОС и ТМС (Куликовский Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021273EBAA",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51578,
                "parent_id" => 30139,
                "position" => "Инженер по строительству ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084459FC00010891F",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51579,
                "parent_id" => 52231,
                "position" => "Директор по развитию",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832ED",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51580,
                "parent_id" => 41184,
                "position" => "Территориальный менеджер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC399C0",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51581,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Байтырсунова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F24C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51582,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Гоголя",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F264",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51583,
                "parent_id" => 41061,
                "position" => "Менеджер по строительно-монтажным работам (КДК)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BC170",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51584,
                "parent_id" => 51215,
                "position" => "Бухгалтер по производству площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021276AB78",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51585,
                "parent_id" => 41157,
                "position" => "Менеджеры ФМ",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC116AC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51586,
                "parent_id" => 51321,
                "position" => "Менеджеры ФМ",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC11856",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51587,
                "parent_id" => 51313,
                "position" => "Ведущий специалист по кадровому администрированию",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444FB40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51588,
                "parent_id" => 51627,
                "position" => "Мастер производственного цеха площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AE7680",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51589,
                "parent_id" => 40374,
                "position" => "Помощник бухгалтера ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF0000422844",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51590,
                "parent_id" => 51627,
                "position" => "Мастер производственного цеха площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AE7780",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51591,
                "parent_id" => 51627,
                "position" => "Мастер производственного цеха площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AE7840",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51592,
                "parent_id" => 41184,
                "position" => "Менеджер отдела хранения ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC39A20",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51593,
                "parent_id" => 10094,
                "position" => "Контент мейкер НСК",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC110",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51594,
                "parent_id" => 51453,
                "position" => "Аудитор НСК",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021273EBAE",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51595,
                "parent_id" => 10010,
                "position" => "ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F80002183220",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51596,
                "parent_id" => 10025,
                "position" => "ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021273E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51597,
                "parent_id" => 10094,
                "position" => "ООО 'Куликовский Новосибирск'",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC370",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51598,
                "parent_id" => 10025,
                "position" => "Департамент экономики",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CBFC000012AB3F80002127620",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51599,
                "parent_id" => 40188,
                "position" => "Отдел оперативного планирования и отгрузки ГП",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CBFC000012AB3F8000212762B9C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51600,
                "parent_id" => 10025,
                "position" => "Отдел разработки и поддержки учетных систем",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CBFC000012AB3F80002127660",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51601,
                "parent_id" => 10025,
                "position" => "ОсОО 'Семейные традиции'",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021276A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51602,
                "parent_id" => 40183,
                "position" => "IT отдел",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C8FC00010891FF800021826B280",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51603,
                "parent_id" => 10022,
                "position" => "Финансовая дирекция",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CBFC000012AB1",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51604,
                "parent_id" => 5,
                "position" => "Администрация",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000991AD90",
                "department_id" => 0,
                "register_contacts" => 3,
                "department_hr" => 1
            ],
            [
                "id" => 51605,
                "parent_id" => 51608,
                "position" => "Специалист отдела планирования и аналитики площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6D867680",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51606,
                "parent_id" => 51215,
                "position" => "Помощник главного бухгалтера площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021276AB68",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51607,
                "parent_id" => 51288,
                "position" => "Складская логистика",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5C6D8610",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51608,
                "parent_id" => 51288,
                "position" => "Отдел планирования и аналитики",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5C6D8670",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51609,
                "parent_id" => 51296,
                "position" => "Заведующие складом площадки Ауэзова",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5C6D8615AC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51610,
                "parent_id" => 51663,
                "position" => "Заведующий складом площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6D8615B560",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51611,
                "parent_id" => 51320,
                "position" => "Технический отдел площадки Ауэзова",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5C6DB2",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51612,
                "parent_id" => 51663,
                "position" => "Заведующий складом товарно-материальных ценностей и основных средств технической службы",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6D8615B610",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51613,
                "parent_id" => 51467,
                "position" => "Слесарь-механик площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DB2B680",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51614,
                "parent_id" => 51467,
                "position" => "Оперативный дежурный площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DB2B780",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51615,
                "parent_id" => 51467,
                "position" => "Оперативный дежурный площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DB2B840",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51616,
                "parent_id" => 51320,
                "position" => "Отдел разработки и инноваций площадки Ауэзова",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5C6DB6",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51617,
                "parent_id" => 51320,
                "position" => "Производственный отдел площадки Ауэзова",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5C6DBA",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51618,
                "parent_id" => 51333,
                "position" => "Производственный отдел площадки Ауэзова",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5C6DBAB580",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51619,
                "parent_id" => 51333,
                "position" => "Лаборатория площадки Ауэзова",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5C6DBAB680",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51620,
                "parent_id" => 51298,
                "position" => "Лаборант-микробиолог площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB6AE30",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51621,
                "parent_id" => 51298,
                "position" => "Лаборант-химико-бактериологического анализа площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB6AD60",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51622,
                "parent_id" => 51298,
                "position" => "Лаборант-химико-бактериологического анализа площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB6ADA0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51623,
                "parent_id" => 51298,
                "position" => "Лаборант-микробиолог площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB6ADE0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51624,
                "parent_id" => 51298,
                "position" => "Лаборант-химико-бактериологического анализа площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB6AE10",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51625,
                "parent_id" => 51290,
                "position" => "Аппартаный цех площадки Ауэзова",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5C6DBAB5AE50",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51626,
                "parent_id" => 51625,
                "position" => "Оператор процесса  площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AE5580",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51627,
                "parent_id" => 51290,
                "position" => "Мастера производственного цеха площадки Ауэзова",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5C6DBAB5AE70",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51628,
                "parent_id" => 51625,
                "position" => "Оператор процесса  площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AE5680",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51629,
                "parent_id" => 51625,
                "position" => "Оператор процесса  площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AE5780",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51630,
                "parent_id" => 51290,
                "position" => "Йогуртный цех площадки Ауэзова",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5C6DBAB5AE88",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51631,
                "parent_id" => 51290,
                "position" => "Цех изготовления творога площадки Ауэзова",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5C6DBAB5AE98",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51632,
                "parent_id" => 51290,
                "position" => "Цех изготовления мороженного площадки Ауэзова",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5C6DBAB5AEA8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51633,
                "parent_id" => 51290,
                "position" => "Цех выдув ПЭТ площадки Ауэзова",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5C6DBAB5AEB8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51634,
                "parent_id" => 51290,
                "position" => "Укладчик-упаковщики площадки Ауэзова",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5C6DBAB5AEC8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51635,
                "parent_id" => 51290,
                "position" => "Прачка УПП площадки Ауэзова",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5C6DBAB5AED8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51636,
                "parent_id" => 51290,
                "position" => "Мойщики посуды площадки Ауэзова",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5C6DBAB5AEE8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51637,
                "parent_id" => 51630,
                "position" => "Оператор процесса  площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AE8AC0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51638,
                "parent_id" => 51630,
                "position" => "Оператор процесса  площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AE8B40",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51639,
                "parent_id" => 51630,
                "position" => "Оператор процесса  площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AE8BC0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51640,
                "parent_id" => 51630,
                "position" => "Оператор процесса  площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AE8C20",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51641,
                "parent_id" => 51630,
                "position" => "Оператор процесса  площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AE8C60",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51642,
                "parent_id" => 51632,
                "position" => "Оператор процесса  площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AEAAC0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51643,
                "parent_id" => 51631,
                "position" => "Оператор процесса  площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AE9AC0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51644,
                "parent_id" => 51631,
                "position" => "Оператор процесса  площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AE9B40",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51645,
                "parent_id" => 51631,
                "position" => "Оператор процесса  площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AE9BC0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51646,
                "parent_id" => 51631,
                "position" => "Оператор процесса  площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AE9C20",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51647,
                "parent_id" => 51632,
                "position" => "Оператор процесса  площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AEAB40",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51648,
                "parent_id" => 51632,
                "position" => "Оператор процесса  площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AEABC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51649,
                "parent_id" => 51632,
                "position" => "Оператор процесса  площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AEAC20",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51650,
                "parent_id" => 51633,
                "position" => "Оператор процесса  площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AEBAC0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51651,
                "parent_id" => 51635,
                "position" => "Прачка УПП площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AEDAC0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51652,
                "parent_id" => 51635,
                "position" => "Прачка УПП площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AEDB40",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51653,
                "parent_id" => 51635,
                "position" => "Прачка УПП площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AEDBC0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51654,
                "parent_id" => 51636,
                "position" => "Мойщики посуды площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AEEAC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51655,
                "parent_id" => 51636,
                "position" => "Мойщики посуды площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AEEB40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51656,
                "parent_id" => 51634,
                "position" => "Укладчик-упаковщик площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AECAC0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51657,
                "parent_id" => 51634,
                "position" => "Укладчик-упаковщик площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AECB40",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51658,
                "parent_id" => 51634,
                "position" => "Укладчик-упаковщик площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AECBC0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51659,
                "parent_id" => 51634,
                "position" => "Укладчик-упаковщик площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AECC20",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51660,
                "parent_id" => 51634,
                "position" => "Укладчик-упаковщик площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AECC60",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51661,
                "parent_id" => 51634,
                "position" => "Укладчик-упаковщик площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AECCA0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51662,
                "parent_id" => 51636,
                "position" => "Мойщик посуды площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AEEBC0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51663,
                "parent_id" => 51296,
                "position" => "Заведующие складом площадки Ауэзова",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5C6D8615B4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51664,
                "parent_id" => 51296,
                "position" => "Грузчики-формировщики площадки Ауэзова",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5C6D8615BC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51665,
                "parent_id" => 51664,
                "position" => "Грузчик-формировщики площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6D8615BD60",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51666,
                "parent_id" => 51664,
                "position" => "Грузчик-формировщик площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6D8615BDA0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51667,
                "parent_id" => 51664,
                "position" => "Грузчик-формировщик площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6D8615BDE0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51668,
                "parent_id" => 51664,
                "position" => "Грузчик-формировщик площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6D8615BE10",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51669,
                "parent_id" => 51664,
                "position" => "Грузчик-формировщик площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6D8615BE30",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51670,
                "parent_id" => 51320,
                "position" => "Служба безопасности площадки Ауэзова",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5C6DBE",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51671,
                "parent_id" => 51686,
                "position" => "Охранник КПП площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DC116AC",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51672,
                "parent_id" => 51686,
                "position" => "Охранник КПП площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DC116B4",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51673,
                "parent_id" => 51686,
                "position" => "Охранник КПП площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DC116BC",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51674,
                "parent_id" => 51663,
                "position" => "Заведующие складом площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6D8615B5E0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51675,
                "parent_id" => 40158,
                "position" => "Бухгалтер по налогам ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084458D10",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ], [
                "id" => 51676,
                "parent_id" => 52405,
                "position" => "Видеографер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509DF680",
                "department_id" => 10,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51678,
                "parent_id" => 51380,
                "position" => "Программист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021827AFB2",
                "department_id" => 7,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51679,
                "parent_id" => 40158,
                "position" => "Заместитель главного бухгалтера по налоговому учету ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084458D30",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51680,
                "parent_id" => 40158,
                "position" => "Бухгалтер по производству ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084458D50",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51681,
                "parent_id" => 40158,
                "position" => "Оператор ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084458D70",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51682,
                "parent_id" => 40158,
                "position" => "Бухгалтер фирменной сети ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084458D90",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51683,
                "parent_id" => 40158,
                "position" => "Бухгалтер по услугам ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084458DB0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51684,
                "parent_id" => 51405,
                "position" => "ФМП Уш-Сункар",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF1AC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51685,
                "parent_id" => 10051,
                "position" => "Служба Безопасности площадки Ауэзова",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5C6DC11580",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51686,
                "parent_id" => 10051,
                "position" => "Служба Безопасности площадки Ауэзова",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5C6DC11680",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51688,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Айнабулак - 3",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F25C",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51689,
                "parent_id" => 30141,
                "position" => "Контент-мейкер ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444BFC000108899",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51690,
                "parent_id" => 51611,
                "position" => "Главный механик площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DB2D0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51691,
                "parent_id" => 10017,
                "position" => "Специалист по кадровому администрированию",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E00008450FAC0",
                "department_id" => 14,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51692,
                "parent_id" => 40145,
                "position" => "Руководитель службы 'Эксклюзив'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC00010A8330",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51693,
                "parent_id" => 40145,
                "position" => "Оформители службы 'Эксклюзив'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC00010A8350",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51694,
                "parent_id" => 40145,
                "position" => "Руководитель службы 'Эксклюзив'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC00010A8370",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51695,
                "parent_id" => 40145,
                "position" => "Руководитель службы 'Эксклюзив'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC00010A8390",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51696,
                "parent_id" => 40145,
                "position" => "Руководитель службы 'Эксклюзив'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC00010A83B0",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51697,
                "parent_id" => 40145,
                "position" => "Руководитель службы 'Эксклюзив'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC00010A83D0",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51698,
                "parent_id" => 40145,
                "position" => "Руководитель службы 'Эксклюзив'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC00010A83F0",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51699,
                "parent_id" => 40145,
                "position" => "Руководитель службы 'Эксклюзив'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC00010A8910",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51700,
                "parent_id" => 40145,
                "position" => "Руководитель службы 'Эксклюзив'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC00010A8930",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51701,
                "parent_id" => 40145,
                "position" => "Руководитель службы 'Эксклюзив'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC00010A8950",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51702,
                "parent_id" => 10081,
                "position" => "Оформители службы 'Эксклюзив'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215162",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51703,
                "parent_id" => 51889,
                "position" => "Менеджер зала",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC11B6F",
                "department_id" => 14,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51704,
                "parent_id" => 51453,
                "position" => "Бухгалтер 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021273EBB2",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51705,
                "parent_id" => 10094,
                "position" => "Категорийный менеджер 'Куликовский Новосибирск'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC130",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51706,
                "parent_id" => 10094,
                "position" => "Категорийный менеджер 'Куликовский Новосибирск'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC150",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51707,
                "parent_id" => 10094,
                "position" => "Категорийный менеджер 'Куликовский Новосибирск'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC170",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51708,
                "parent_id" => 10094,
                "position" => "Территориальный руководитель ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC190",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51709,
                "parent_id" => 51213,
                "position" => "Графический дизайнер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509D1840",
                "department_id" => 1,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51710,
                "parent_id" => 10058,
                "position" => "Технолог по сырью",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025733F000004AED7E00000980E80",
                "department_id" => 13,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51711,
                "parent_id" => 10058,
                "position" => "Технолог производственных цехов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025733F000004AED7E00000980F80",
                "department_id" => 13,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51712,
                "parent_id" => 51453,
                "position" => "Бухгалтер по взаиморасчетам ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021273EBB6",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51713,
                "parent_id" => 51985,
                "position" => "Специалист ДЦТ ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021826B45A",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51714,
                "parent_id" => 40197,
                "position" => "Нарколог",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990FAD6",
                "department_id" => 1,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51715,
                "parent_id" => 40197,
                "position" => "Нарколог",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990FADA",
                "department_id" => 1,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51716,
                "parent_id" => 52040,
                "position" => "Инспектор по экономической безопасности",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE0000844C8AC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51717,
                "parent_id" => 52405,
                "position" => "Контент-мейкер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509DF580",
                "department_id" => 10,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51718,
                "parent_id" => 40374,
                "position" => "Бухгалтер по производству",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF00004228C4",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51719,
                "parent_id" => 51380,
                "position" => "Программист 1С",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021827AF9C",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51720,
                "parent_id" => 51349,
                "position" => "Программист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021827EB84",
                "department_id" => 7,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51721,
                "parent_id" => 10125,
                "position" => "Слесарь-сантехник",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BB3F000042EC740",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51722,
                "parent_id" => 10126,
                "position" => "Специалист по ремонтно-строительным работам",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BAFF000043007C0",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51723,
                "parent_id" => 40267,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021176EB0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51724,
                "parent_id" => 40293,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F800021232E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51725,
                "parent_id" => 40293,
                "position" => "Клининг-специалист ФМ",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F8000212332",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51726,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021242E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51727,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212432",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51728,
                "parent_id" => 40205,
                "position" => "Бариста",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212436",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51729,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021243A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51730,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021243E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51731,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212462",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51732,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212466",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51733,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021246A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51734,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021246E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51735,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212472",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51736,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212476",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51737,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021247A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51738,
                "parent_id" => 40314,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F00004248CC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51739,
                "parent_id" => 40314,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F000042487C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51740,
                "parent_id" => 41072,
                "position" => "Формировщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF0000430447E00008505880",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51741,
                "parent_id" => 40536,
                "position" => "Кладовщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE8ADBF000043044D7380",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],

            [
                "id" => 51743,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C8D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51744,
                "parent_id" => 41067,
                "position" => "Кладовщик-холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE0000851DB80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51745,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C8E8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51746,
                "parent_id" => 41066,
                "position" => "Грузчик-дробильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F8000215536",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51747,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C8F8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51748,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C988",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51749,
                "parent_id" => 41066,
                "position" => "Грузчик-дробильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F800021553A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51750,
                "parent_id" => 41066,
                "position" => "Грузчик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F800021553E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51751,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C998",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51752,
                "parent_id" => 41066,
                "position" => "Грузчик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F8000215562",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51753,
                "parent_id" => 41066,
                "position" => "Грузчик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F8000215566",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51754,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C9A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51755,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C9B8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51756,
                "parent_id" => 41066,
                "position" => "Оператор по обработке яиц",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F800021556A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51757,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C9C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51758,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C9D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51759,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C9E8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51760,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084C9F8",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51761,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084CC88",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51762,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084CC98",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51763,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084CCA8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51764,
                "parent_id" => 40859,
                "position" => "Грузчик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C8DDA",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51765,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084CCB8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51766,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084CCC8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51767,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084CCD8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51768,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084CCE8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51769,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084CCF8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51770,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084CD88",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51771,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084CD98",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51772,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084CDA8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51773,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084CDB8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51774,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084CDC8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51775,
                "parent_id" => 40672,
                "position" => "ассистент",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215123F000042AA740",
                "department_id" => 1,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51776,
                "parent_id" => 51274,
                "position" => "Менеджер магазина ФМ Ак-Орго",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1185B92E0",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51777,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AEC80",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51778,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AED80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51779,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AEE80",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51780,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AEF80",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51781,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AF044",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51782,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AF04C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51783,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AF054",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51784,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AF05C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51785,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AF064",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51786,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AF06C",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51787,
                "parent_id" => 40205,
                "position" => "",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021247E",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51788,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212522",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51789,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212526",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51790,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021252A",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51791,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021252E",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51792,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212532",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51793,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212536",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51794,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021253A",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51795,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021253E",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51796,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212562",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51797,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212566",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51798,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021256A",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51799,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021256E",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51800,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212572",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51801,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212576",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51802,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021257A",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51803,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021257E",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51804,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212622",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51805,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212626",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51806,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021262A",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51807,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021262E",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51808,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212632",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51809,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212636",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51810,
                "parent_id" => 40205,
                "position" => "сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021263A",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51811,
                "parent_id" => 40613,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A29BF800021457E0",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51812,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC9B0",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51813,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC9D0",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51814,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BC9F0",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51815,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BCB10",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51816,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BCB30",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51817,
                "parent_id" => 40196,
                "position" => "Куратор доставки",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000108997F800021133328",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51818,
                "parent_id" => 41000,
                "position" => "Специалист по маркировке тары",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF80002181620",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51819,
                "parent_id" => 41000,
                "position" => "Специалист по маркировке тары",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF80002181660",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51820,
                "parent_id" => 41000,
                "position" => "Специалист по маркировке тары",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF800021816A0",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51821,
                "parent_id" => 41000,
                "position" => "Специалист по маркировке тары",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF800021816E0",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51822,
                "parent_id" => 40999,
                "position" => "Оператор по упаковке готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF80002180360",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51823,
                "parent_id" => 40999,
                "position" => "Оператор по упаковке готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF80002180660",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51824,
                "parent_id" => 40999,
                "position" => "Оператор по упаковке готовой продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EDF800021803E0",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51825,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D8F8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51826,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D988",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51827,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D998",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51828,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D9A8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51829,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D9B8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51830,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D9C8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51831,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D9D8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51832,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D9E8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51833,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085D9F8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51834,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085DC88",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51835,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085DC98",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51836,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085DCA8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51837,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085DCB8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51838,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085DCC8",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51839,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085DCD8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51840,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085DCE8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51841,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085DCF8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51842,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426A54",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51843,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426A5C",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51844,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426A64",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51845,
                "parent_id" => 40317,
                "position" => "Специалист ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426A6C",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51846,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426A74",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51847,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426A7C",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51848,
                "parent_id" => 40317,
                "position" => "Клининг-специалист производственных и бытовых помещений",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426C6C",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51849,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426AC4",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51850,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426ACC",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51851,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426AD4",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51852,
                "parent_id" => 51536,
                "position" => "Менеджер ФМ 'Мега' (Новосибирск)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC196D7",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51853,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426ADC",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51854,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426AE4",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51855,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426AEC",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51856,
                "parent_id" => 40317,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426AF4",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51857,
                "parent_id" => 40317,
                "position" => "Клининг-специалист производственных и бытовых помещений",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426AFC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51858,
                "parent_id" => 40317,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426C44",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51859,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426C4C",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51860,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426C54",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51861,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426C5C",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51862,
                "parent_id" => 41067,
                "position" => "Руководитель отдела ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008555BAFE0000851DC80",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51863,
                "parent_id" => 10094,
                "position" => "IT специалист  ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC1B0",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51864,
                "parent_id" => 10094,
                "position" => "Юрист ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC1D0",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51865,
                "parent_id" => 40205,
                "position" => "Бариста",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021263E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51866,
                "parent_id" => 41110,
                "position" => "Монтажник системы кабельной связи",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021826B2AE50",
                "department_id" => 7,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51867,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212662",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51868,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212666",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51869,
                "parent_id" => 41074,
                "position" => "специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085D598",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51870,
                "parent_id" => 41074,
                "position" => "специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085D5A8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51871,
                "parent_id" => 40188,
                "position" => "Финансовый аналитик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F8000212762BA2",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51872,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021266A",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51873,
                "parent_id" => 40188,
                "position" => "Специалист по бюджетированию",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F8000212762BA6",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51874,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F8000216332",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51875,
                "parent_id" => 10125,
                "position" => "Специалист по ремонтно-строительным работам",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BB3F000042EC7C0",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51876,
                "parent_id" => 10125,
                "position" => "Специалист по ремонтно-строительным работам",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BB3F000042ECC40",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51877,
                "parent_id" => 10125,
                "position" => "Специалист по ремонтно-строительным работам",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BB3F000042ECCC0",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51878,
                "parent_id" => 10125,
                "position" => "Специалист по ремонтно-строительным работам",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BB3F000042ECD40",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51879,
                "parent_id" => 10125,
                "position" => "Специалист по ремонтно-строительным работам",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009919FC00010C09BB3F000042ECDC0",
                "department_id" => 23,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51880,
                "parent_id" => 51585,
                "position" => "Менеджер магазина ФМ 'Технопарк'",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC116AF0540",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51881,
                "parent_id" => 51320,
                "position" => "Инспектор по ОТ и ТБ площадки Ауэзова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DC130",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51882,
                "parent_id" => 51535,
                "position" => "Менеджер ФМ Матрешки (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC195D9",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51883,
                "parent_id" => 51357,
                "position" => "Менеджер кофе-станции",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDAB08",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51884,
                "parent_id" => 51585,
                "position" => "Менеджер магазина ФМ Технопарк",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC116AEE8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51885,
                "parent_id" => 51585,
                "position" => "Менеджер кофе-станции ЦУМ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC116AED8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51886,
                "parent_id" => 30139,
                "position" => "Главный инженер ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084459FC000108931",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51887,
                "parent_id" => 40374,
                "position" => "Расчетный бухгалтер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF00004228CC",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51888,
                "parent_id" => 51889,
                "position" => "Бариста",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC11B6B",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51889,
                "parent_id" => 51275,
                "position" => "Бариста",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC11B60",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51890,
                "parent_id" => 51889,
                "position" => "Бариста",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC11B6D",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51891,
                "parent_id" => 51579,
                "position" => " Руководитель направления Horeca ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832ED68",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51892,
                "parent_id" => 40318,
                "position" => "Мойщик посуды",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084CDD8",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51893,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021267A",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51894,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021267E",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51895,
                "parent_id" => 40293,
                "position" => "Уборщица ФМ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F8000212336",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51896,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085D5B8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51897,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085D5C8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51898,
                "parent_id" => 41074,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C6FFE00008595FAFE000085D5D8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51899,
                "parent_id" => 40935,
                "position" => "Отдел изготовления полуфабрикатных заготовок",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C8456",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51900,
                "parent_id" => 51899,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C845718",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51901,
                "parent_id" => 51899,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C845738",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51902,
                "parent_id" => 51899,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C845744",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51903,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212722",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51904,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212726",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51905,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021272A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51906,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021272E",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51907,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212732",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51908,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212736",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51909,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021273A",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51910,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021273E",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51911,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212762",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51912,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085DD88",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51913,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085DD98",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51914,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085DDA8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51915,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085DDB8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51916,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085DDC8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51917,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085DDD8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51918,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085DDE8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51919,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E000085DDF8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51920,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E0000860088",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51921,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E0000860098",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51922,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E00008600A8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51923,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E00008600B8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51924,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E00008600C8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51925,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E00008600D8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51926,
                "parent_id" => 40844,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E00008600E8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51927,
                "parent_id" => 40849,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C84FE00008594F8",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51928,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC00010A0B3",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51929,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC00010A0B5",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51930,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC00010A0B7",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51931,
                "parent_id" => 40472,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC00010A0B9",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51932,
                "parent_id" => 40478,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3397AF074",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51933,
                "parent_id" => 40558,
                "position" => "Грузчик-холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BDC170",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51934,
                "parent_id" => 40558,
                "position" => "Холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BDC190",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51935,
                "parent_id" => 40558,
                "position" => "Грузчик-холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BDC1B0",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51936,
                "parent_id" => 40558,
                "position" => "Грузчик-холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BDC1D0",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51937,
                "parent_id" => 40558,
                "position" => "Грузчик-холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BDC1F0",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51938,
                "parent_id" => 40558,
                "position" => "Грузчик-холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3395FC00010A0BDC310",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51939,
                "parent_id" => 10088,
                "position" => "Отдел подготовки инвентаря",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A337",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51940,
                "parent_id" => 51939,
                "position" => "Оператор подготовки инвентаря",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A33778",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51941,
                "parent_id" => 40600,
                "position" => "Холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572D",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51942,
                "parent_id" => 51941,
                "position" => "Холодильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572D58",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51943,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212766",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51944,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021276A",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51945,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021276E",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51946,
                "parent_id" => 40293,
                "position" => "Уборщица кофейни",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F800021233A",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51947,
                "parent_id" => 51402,
                "position" => "Тренер по кофе ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACEB",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51948,
                "parent_id" => 51402,
                "position" => "Тренер по кофе ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACED",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51949,
                "parent_id" => 51402,
                "position" => "Тренер по кофе ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACEF",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51950,
                "parent_id" => 51536,
                "position" => "Менеджер магазина ФМ Кропоткина (Новосибирск)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC196D9",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51951,
                "parent_id" => 41066,
                "position" => "Грузчик - дробильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F800021556E",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51952,
                "parent_id" => 41066,
                "position" => "Грузчик - дробильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F8000215572",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51953,
                "parent_id" => 41066,
                "position" => "Грузчик - дробильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F8000215576",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51954,
                "parent_id" => 41066,
                "position" => "Грузчик - дробильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F800021557A",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51955,
                "parent_id" => 41066,
                "position" => "Грузчик - дробильщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00008554CFC00010C0B5F800021557E",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51956,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212772",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51957,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042C0F40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51958,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042C0FC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51959,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042C2440",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51960,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042C24C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51961,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042C2540",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51962,
                "parent_id" => 40670,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013095F800021507BF000042C25C0",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51963,
                "parent_id" => 51535,
                "position" => "Менеджер магазина ФМ Кубовая",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC195DB",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51964,
                "parent_id" => 51535,
                "position" => "Менеджер ФМ Гребенщикова (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC195DD",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51965,
                "parent_id" => 51535,
                "position" => "Менеджер ФМ Гребенщикова (Новосибирск)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC195DF",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51966,
                "parent_id" => 51535,
                "position" => "Менеджер ФМ Гребенщикова (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC195E088",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51967,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BCB50",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51968,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BCB70",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51969,
                "parent_id" => 51270,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A19BF8000214572BCB90",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51970,
                "parent_id" => 51536,
                "position" => "Менеджер магазина ФМ Кропоткина (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC196DB",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51971,
                "parent_id" => 52081,
                "position" => "Менеджер по продукту ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509D50",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51972,
                "parent_id" => 10015,
                "position" => "Помощник юриста ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009918AFE0000844598",
                "department_id" => 1,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51973,
                "parent_id" => 51536,
                "position" => "Менеджер магазина ФМ Троллейная (Новосибирск)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC196DD",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51974,
                "parent_id" => 51213,
                "position" => "Графический дизайнер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509D1780",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51975,
                "parent_id" => 51535,
                "position" => "Менеджер ФМ Гоголя (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC195E098",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51976,
                "parent_id" => 51886,
                "position" => "Менеджер по эксплуатации ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084459FC00010893158",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51977,
                "parent_id" => 40317,
                "position" => "Уборщица",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426C64",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51978,
                "parent_id" => 40613,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A29BF80002146220",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51979,
                "parent_id" => 40623,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A2BFF800021466A0",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51980,
                "parent_id" => 40314,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026162BF8000026377F00004248C4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51981,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F8000212776",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51982,
                "parent_id" => 40374,
                "position" => "Старший бухгалтер по розничной сети ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF0000422854",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51983,
                "parent_id" => 10014,
                "position" => "Руководитель HR регионов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E00008450A8",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51984,
                "parent_id" => 52214,
                "position" => "Проектный менеджер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832AB",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51985,
                "parent_id" => 40183,
                "position" => "Руководитель отдела информационных технологий ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021826B440",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51986,
                "parent_id" => 10119,
                "position" => "Департамент технического снабжения",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990EAE7",
                "department_id" => 0,
                "register_contacts" => 51986,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51987,
                "parent_id" => 41000,
                "position" => "Специалист по маркировке тары",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002613ABF800021757EBF80002181720",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51988,
                "parent_id" => 51579,
                "position" => "Руководитель направления кухни",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832ED78",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51989,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021277A",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51990,
                "parent_id" => 40205,
                "position" => "Сервис-консультант",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC15F800021277E",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51991,
                "parent_id" => 51453,
                "position" => "Бухгалтер розничной сети ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021273EBBA",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51992,
                "parent_id" => 51579,
                "position" => "Head по кухне",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832ED58",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51993,
                "parent_id" => 51290,
                "position" => "Технолог",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AEF8",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51994,
                "parent_id" => 51290,
                "position" => "Технолог",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AF0440",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51995,
                "parent_id" => 51290,
                "position" => "Технолог",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AF04C0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51996,
                "parent_id" => 51290,
                "position" => "Технолог",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AF0540",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51997,
                "parent_id" => 51290,
                "position" => "Технолог",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AF05C0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51998,
                "parent_id" => 51290,
                "position" => "Технолог",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AF0640",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 51999,
                "parent_id" => 51290,
                "position" => "Технолог",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AF06C0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52000,
                "parent_id" => 51290,
                "position" => "Технолог",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AF0740",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52001,
                "parent_id" => 51290,
                "position" => "техгнолог",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AF07C0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52002,
                "parent_id" => 51290,
                "position" => "Тест",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AF0C40",
                "department_id" => 3,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52003,
                "parent_id" => 51290,
                "position" => "техгнолог",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5C6DBAB5AF0CC0",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52004,
                "parent_id" => 51535,
                "position" => "Менеджер магазина ФМ Дзержинского (Новосибирск)",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC195E0A8",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52005,
                "parent_id" => 51536,
                "position" => "Менеджер магазина ФМ «Новосибирская»",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC196DF",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52006,
                "parent_id" => 41070,
                "position" => "Грузчик ЦС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D56FC000109A150",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52007,
                "parent_id" => 41082,
                "position" => "Оператор Contact centre",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0BFC0001088BF780",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52008,
                "parent_id" => 40293,
                "position" => "Уборщица ФМ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F800021233E",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52009,
                "parent_id" => 40158,
                "position" => "Бухгалтер фирменной сети ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084458C20",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52010,
                "parent_id" => 40168,
                "position" => "Руководитель отдела экспедирования ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444EB63",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52011,
                "parent_id" => 40168,
                "position" => "Руководитель отдела хранения ТОО Куликовский Казахстан",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444EB65",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52012,
                "parent_id" => 51402,
                "position" => "Сервис-менеджер  ФС ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF380",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52013,
                "parent_id" => 51402,
                "position" => "Куратор ФС ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF280",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52014,
                "parent_id" => 40158,
                "position" => "Оператор ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084458BC0",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52015,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Толе Би",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F274",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52016,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Мендикулова",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F27C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52017,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Толе Би",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F2C4",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52018,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Рыскулова",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F2CC",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52019,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Каменка",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F2D4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52020,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Каменка",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F2DC",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52021,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Саина",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F2E4",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52022,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Каменка",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F2EC",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52023,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Каменка",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F2F4",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52024,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Сары-Арка ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F2FC",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52025,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Жетысу",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F444",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52026,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Алмагуль",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F44C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52027,
                "parent_id" => 40859,
                "position" => "Грузчик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C8DDE",
                "department_id" => 18,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52028,
                "parent_id" => 41082,
                "position" => "Оператор Contact centre",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0BFC0001088BF580",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52029,
                "parent_id" => 10094,
                "position" => "Специалист ОКК",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC1F0",
                "department_id" => 11,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52030,
                "parent_id" => 51886,
                "position" => "Инженер по строительству ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084459FC00010893168",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52031,
                "parent_id" => 40158,
                "position" => "Специалист 1С ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084458C60",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52032,
                "parent_id" => 40158,
                "position" => "Специалист 1С ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084458CA0",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52033,
                "parent_id" => 40476,
                "position" => "Производственный цех Восток",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A33984",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52034,
                "parent_id" => 40476,
                "position" => "Производственный цех Восток",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3398C",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52035,
                "parent_id" => 40476,
                "position" => "Производственный цех Восток",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A33994",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52036,
                "parent_id" => 40476,
                "position" => "Производственный цех 'Восток'",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3399C",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52037,
                "parent_id" => 52036,
                "position" => "Оператор по упаковке продукции",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3399D60",
                "department_id" => 17,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52038,
                "parent_id" => 51274,
                "position" => "Менеджер ФМ Киркомстром",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1185B93A0",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52039,
                "parent_id" => 51536,
                "position" => "Менеджер ФМ Кирова 48 (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC196E098",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52041,
                "parent_id" => 41082,
                "position" => "Оператор Contact centre",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0BFC0001088BF680",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52042,
                "parent_id" => 10075,
                "position" => "Оператор Contact centre",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0AE0A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52043,
                "parent_id" => 40318,
                "position" => "Специалист по обработке инвентаря",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586BAFE000084CDE8",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52044,
                "parent_id" => 51579,
                "position" => "Руководитель кофейного направления",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC190",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52045,
                "parent_id" => 40613,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A29BF80002146260",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52046,
                "parent_id" => 40613,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A29BF800021462A0",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52047,
                "parent_id" => 40613,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A29BF800021462E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52048,
                "parent_id" => 40613,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A29BF80002146320",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52049,
                "parent_id" => 40613,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A29BF800021463A0",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52050,
                "parent_id" => 40613,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A29BF800021463E0",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52051,
                "parent_id" => 40613,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A29BF80002146620",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52052,
                "parent_id" => 40613,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A29BF80002146660",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52053,
                "parent_id" => 40613,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A29BF800021466A0",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52054,
                "parent_id" => 40613,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A29BF800021466E0",
                "department_id" => 19,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52055,
                "parent_id" => 40671,
                "position" => "Старший специалист ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A8740",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52056,
                "parent_id" => 40671,
                "position" => "Старший специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A87C0",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52057,
                "parent_id" => 10034,
                "position" => "Микробиолог",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990BFC000012B15F800021763A0",
                "department_id" => 11,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52058,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A8C40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52059,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A8CC0",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52060,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A8D40",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52061,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A8DC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52062,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A8E40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52063,
                "parent_id" => 40671,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021507FF000042A8EC0",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52064,
                "parent_id" => 10081,
                "position" => "Отдел выпечки полуфабрикатов",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F8000215166",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52065,
                "parent_id" => 52064,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021516738",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52066,
                "parent_id" => 10081,
                "position" => "Отдел изготовления фреш-линии",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021516A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52067,
                "parent_id" => 52066,
                "position" => "Руководитель отдела фреш-линии",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021516AB0",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52068,
                "parent_id" => 52066,
                "position" => "Специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025763F000004C0FFE000084409FC000013093F800021516AF0",
                "department_id" => 20,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52069,
                "parent_id" => 41068,
                "position" => "Оператор очистки сырья",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025737F000004C047E00000980BFC00010C0B9F800021633A",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52070,
                "parent_id" => 51453,
                "position" => "Бухгалтер розничной сети ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021273EBBE",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52071,
                "parent_id" => 51453,
                "position" => "Бухгалтер  ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021273EBC110",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52072,
                "parent_id" => 51275,
                "position" => "Сервис-менеджер ФС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC11AA0",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52073,
                "parent_id" => 10096,
                "position" => "Менеджер по техническим работам ФС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC11A6D",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52074,
                "parent_id" => 10096,
                "position" => "Руководитель кофейного направления ФС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC11A6B",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52075,
                "parent_id" => 51579,
                "position" => "Территориальный руководитель по ФМК",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDB2",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52076,
                "parent_id" => 10094,
                "position" => "Контент мейкер ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC310",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52077,
                "parent_id" => 51473,
                "position" => "Специалист по техническому снабжению",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE75C20",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52078,
                "parent_id" => 52492,
                "position" => "Заведующий складом МО",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D35AC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52079,
                "parent_id" => 51314,
                "position" => "Специалист по снабжению",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE35FC0000131B994",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52080,
                "parent_id" => 51314,
                "position" => "Специалист по снабжению",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE35FC0000131B99C",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],

            [
                "id" => 52082,
                "parent_id" => 51579,
                "position" => "Помощник бранч - менеджера",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1B0",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52083,
                "parent_id" => 51287,
                "position" => "PR - менеджер  'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B8E10",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52084,
                "parent_id" => 40472,
                "position" => "Мастер ПЦ 'Десерты Мира'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F800002616ED6FC00010A3396FC00010A0BB",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52085,
                "parent_id" => 51287,
                "position" => "Интернет - маркетолог 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B8E30",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52086,
                "parent_id" => 40293,
                "position" => "Клининг - специалист ФМ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F8000212362",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52087,
                "parent_id" => 40317,
                "position" => "Клининг - специалист производственных и бытовых помещений",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426C74",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52088,
                "parent_id" => 40293,
                "position" => "Клининг - специалист ФМ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC17F8000212366",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52089,
                "parent_id" => 51484,
                "position" => "Территориальный менеджер ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BBB44",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52090,
                "parent_id" => 10114,
                "position" => "Менеджер отдела хранения",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56C60",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52091,
                "parent_id" => 10094,
                "position" => "Контент мейкер ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC350",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52092,
                "parent_id" => 10135,
                "position" => "Отдел оперативного планирования и отгрузки ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F8000212762B7AC0",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52093,
                "parent_id" => 52198,
                "position" => "Мерчендайзер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990CB56",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52094,
                "parent_id" => 51313,
                "position" => "Ведущий специалист по подбору персонала и адаптации",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444FBC0",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52095,
                "parent_id" => 51313,
                "position" => "Специалист по подбору персонала и адаптации ФС",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444FC20",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52096,
                "parent_id" => 51313,
                "position" => "Специалист по подбору персонала и адаптации ФС",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444FC60",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52097,
                "parent_id" => 10025,
                "position" => "ООО 'KD KULIKOV' (г. Ташкент)",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021276E0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52098,
                "parent_id" => 52097,
                "position" => "Главный бухгалтер ООО 'KD KULIKOV' (г.Ташкент)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021276EB",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52099,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Жангельдина",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F454",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52100,
                "parent_id" => 52492,
                "position" => "Заведующий складом МО",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56D35B4",
                "department_id" => 4,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52101,
                "parent_id" => 51988,
                "position" => "Повар-универсал",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832ED7AC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52102,
                "parent_id" => 51988,
                "position" => "Повар-универсал",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832ED7B40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52103,
                "parent_id" => 51988,
                "position" => "Повар-универсал",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832ED7BC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52104,
                "parent_id" => 51988,
                "position" => "Су-шеф",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832ED7C20",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52105,
                "parent_id" => 40158,
                "position" => "Помощник главного бухгалтера",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084458AC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52106,
                "parent_id" => 52081,
                "position" => "Руководителя по маркетингу  ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509DB0",
                "department_id" => 26,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52107,
                "parent_id" => 30141,
                "position" => "Контент-мейкер ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444BFC00010889B",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52108,
                "parent_id" => 51984,
                "position" => "Руководитель отдела  логистики  ООО 'KD KULIKOV' (г.Ташкент)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832ABAA",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52109,
                "parent_id" => 40168,
                "position" => "Менеджер по работе с дистрибьюторами",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444EB61",
                "department_id" => 25,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52110,
                "parent_id" => 40317,
                "position" => "Клининг-специалист производственных и бытовых помещений",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426C7C",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52111,
                "parent_id" => 10098,
                "position" => "Центральный Офис",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EBC950",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52112,
                "parent_id" => 10119,
                "position" => "Отдел Экспедирования",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990EAE880",
                "department_id" => 0,
                "register_contacts" => 52112,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52113,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ 'Момышулы'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F45C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52114,
                "parent_id" => 51343,
                "position" => "Администратор магазина",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B958",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52115,
                "parent_id" => 20137,
                "position" => "Уборщик производственных и бытовых помещений",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021106E0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52116,
                "parent_id" => 20137,
                "position" => "Кондитер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F80002110720",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52117,
                "parent_id" => 20137,
                "position" => "Пекарь",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F80002110760",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52118,
                "parent_id" => 20138,
                "position" => "Заведующий складом сырья и полуфабрикатов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B5F80000B45760",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52119,
                "parent_id" => 20137,
                "position" => "Кондитер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021107A0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52120,
                "parent_id" => 20137,
                "position" => "Кондитер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021107E0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52121,
                "parent_id" => 20137,
                "position" => "пекарь",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F80002111220",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52122,
                "parent_id" => 20137,
                "position" => "Кондитер-оформитель",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F80002111260",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52123,
                "parent_id" => 20137,
                "position" => "Кондитер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021112A0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52124,
                "parent_id" => 20137,
                "position" => "Весовщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021112E0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52125,
                "parent_id" => 20137,
                "position" => "Кондитер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F80002111320",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52126,
                "parent_id" => 20138,
                "position" => "Заведующий складом сырья и полуфабрикатов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B5F80000B457A0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52127,
                "parent_id" => 20138,
                "position" => "Заведующий складом сырья и полуфабрикатов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B5F80000B457E0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52128,
                "parent_id" => 20137,
                "position" => "Кондитер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F80002111360",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52129,
                "parent_id" => 20137,
                "position" => "пекарь",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021113A0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52130,
                "parent_id" => 20137,
                "position" => "Сп. по эксклюзивному оформлению и шоколадному декору",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021113E0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52131,
                "parent_id" => 40158,
                "position" => "Старший бухгалтер ФС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084458B40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52132,
                "parent_id" => 52098,
                "position" => "Бухгалтер ООО 'KD KULIKOV' (г.Ташкент)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021276EB58",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52133,
                "parent_id" => 20137,
                "position" => "Кондитер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F80002111620",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52134,
                "parent_id" => 20137,
                "position" => "Пекарь",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F80002111660",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52135,
                "parent_id" => 20137,
                "position" => "Дворник",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021116A0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52136,
                "parent_id" => 20137,
                "position" => "Кондитер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021116E0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52137,
                "parent_id" => 20137,
                "position" => "Кондитер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F80002111720",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52138,
                "parent_id" => 20137,
                "position" => "Кондитер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F80002111760",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52139,
                "parent_id" => 20137,
                "position" => "Кондитер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021117A0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52140,
                "parent_id" => 20137,
                "position" => "Мойщик производственного инвентаря и тары",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021117E0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52141,
                "parent_id" => 20137,
                "position" => "Кондитер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F80002112220",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52142,
                "parent_id" => 20137,
                "position" => "Кондитер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F80002112260",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52143,
                "parent_id" => 20137,
                "position" => "Специалист по сборке тортов",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021122A0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52144,
                "parent_id" => 20137,
                "position" => "Кондитер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021122E0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52145,
                "parent_id" => 20137,
                "position" => "Кондитер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F80002112320",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52146,
                "parent_id" => 20137,
                "position" => "Кондитер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F80002112360",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52147,
                "parent_id" => 20137,
                "position" => "Кондитер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021123A0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52148,
                "parent_id" => 20137,
                "position" => "Оформитель",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021123E0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52149,
                "parent_id" => 20137,
                "position" => "Специалист по оформлению ГП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F80002112620",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52150,
                "parent_id" => 20137,
                "position" => "Уборщик производственных и бытовых помещений",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F80002112660",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52151,
                "parent_id" => 20137,
                "position" => "Кондитер-оформитель",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021126A0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52152,
                "parent_id" => 20137,
                "position" => "Специалист по сборке",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021126E0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52153,
                "parent_id" => 20137,
                "position" => "Формировщик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F80002112720",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52154,
                "parent_id" => 51343,
                "position" => "Региональный менеджер",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B968",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52155,
                "parent_id" => 20137,
                "position" => "Оформитель",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F80002112760",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52156,
                "parent_id" => 20137,
                "position" => "Уборщик производственных и бытовых помещений",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021127A0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52157,
                "parent_id" => 20137,
                "position" => "Уборщик производственных и бытовых помещений",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449DFC00005A2B7F800021127E0",
                "department_id" => 21,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52159,
                "parent_id" => 40317,
                "position" => "Клининг-специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426CC4",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52160,
                "parent_id" => 40317,
                "position" => "Клининг-специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE000009908FC000012B9586ACFF0000426CCC",
                "department_id" => 2,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52162,
                "parent_id" => 51985,
                "position" => "ИТ-специалист",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021826B456",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52163,
                "parent_id" => 10058,
                "position" => "Технолог",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025733F000004AED7E00000981A80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52164,
                "parent_id" => 41082,
                "position" => "Оператор Контак-центра",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0BFC0001088BF840",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52165,
                "parent_id" => 41082,
                "position" => "Супервайзер Контак-центра",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0BFC0001088BF8C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52166,
                "parent_id" => 51984,
                "position" => "Менеджеры ФМ г. Ташкент",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832AB58",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52167,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМ Чилназар",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F474",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52168,
                "parent_id" => 40166,
                "position" => "Инженер холодильного оборудования",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444EB5ED0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52169,
                "parent_id" => 52166,
                "position" => "Менеджер ФМ Сергели ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832AB5BC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52170,
                "parent_id" => 51488,
                "position" => "Менеджер ФМ Кемел",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F46C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52171,
                "parent_id" => 52098,
                "position" => "Оператор 1С ООО 'KD KULIKOV' (г.Ташкент)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021276EB68",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52172,
                "parent_id" => 40374,
                "position" => "Бухгалтер по учету ОС",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF000042286C",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52173,
                "parent_id" => 51984,
                "position" => "HR - Generalist (Ташкент)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832ABB2",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52174,
                "parent_id" => 51579,
                "position" => "Branch-менеджер ФC",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC1D0",
                "department_id" => 6,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52175,
                "parent_id" => 52081,
                "position" => "Менеджер по продукту",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CEAFE000084509E0880",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52176,
                "parent_id" => 51380,
                "position" => "Старший программист",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021827AFA2",
                "department_id" => 7,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52177,
                "parent_id" => 40155,
                "position" => "Инженер по ТБ и ОТ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444C8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52178,
                "parent_id" => 51536,
                "position" => "Менеджер ФМ Бердск (Новосибирск)",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC196E0A8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52179,
                "parent_id" => 51402,
                "position" => "Менеджер по категориям ТОО 'Куликовский Казахстан' ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF4C0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52180,
                "parent_id" => 51402,
                "position" => "Менеджер кофейного направления ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF440",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52181,
                "parent_id" => 52166,
                "position" => "Менеджер ФМ Магнум",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832AB5AC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52182,
                "parent_id" => 52166,
                "position" => "Менеджер ФМ Беруни",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832AB5B40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52183,
                "parent_id" => 51601,
                "position" => "Главный бухгалтер площадки Ауэзова",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021276AD",
                "department_id" => 28,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52184,
                "parent_id" => 40166,
                "position" => " Инженер-холодильщик ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444EB5EF0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52185,
                "parent_id" => 51984,
                "position" => "Программист ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832ABAE",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52186,
                "parent_id" => 51488,
                "position" => "Менеджер Кофе - станции 'Малая Саина'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F47C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52187,
                "parent_id" => 51488,
                "position" => "Менеджер кофе - станции 'Жетысу 2'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F4C4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52188,
                "parent_id" => 30141,
                "position" => "Бранч - менеджер ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444BFC00010889D",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52189,
                "parent_id" => 10094,
                "position" => "Системный Администратор 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC3B0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52190,
                "parent_id" => 41189,
                "position" => "Модератор игр",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E0000844DAAC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52191,
                "parent_id" => 41189,
                "position" => "Модератор игр",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E0000844DAB40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52192,
                "parent_id" => 51215,
                "position" => "Бухгалтер-кассир ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021276AB84",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52193,
                "parent_id" => 52194,
                "position" => "Руководитель по развитию сети г. Ташкент",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832AB9D60",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52194,
                "parent_id" => 51984,
                "position" => "Фирменная сеть г. Ташкент",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832AB9C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52195,
                "parent_id" => 51984,
                "position" => "Тренинг-менеджер г. Ташкент",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832ABA2",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52196,
                "parent_id" => 10017,
                "position" => "Специалист по кадровому администрированию",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E00008450FB40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52197,
                "parent_id" => 52108,
                "position" => "Начальник снабжения",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832ABAAD0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52198,
                "parent_id" => 51465,
                "position" => " Руководитель отдела продаж",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990CB40",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52199,
                "parent_id" => 40374,
                "position" => "Операционист по вводу номенклатур",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF0000422874",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52200,
                "parent_id" => 40374,
                "position" => "Бухгалтер фирменной сети",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021263BF000042287C",
                "department_id" => 24,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52201,
                "parent_id" => 40176,
                "position" => "Специалист по обучению и развитию персонала",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E000084488AC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52202,
                "parent_id" => 41189,
                "position" => "Специалист по развитию корпоративной культуры и коммуникациям",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CDB7E0000844DAC20",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52203,
                "parent_id" => 10094,
                "position" => "Ассистент менеджера по связям с общественностью",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC3D0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52204,
                "parent_id" => 51349,
                "position" => "Программист ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021827EB68",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52205,
                "parent_id" => 51349,
                "position" => "Программист ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021827EB78",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52206,
                "parent_id" => 10094,
                "position" => "Мерчендайзер ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC3F0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52207,
                "parent_id" => 52075,
                "position" => "Менеджеры ФМ",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDB2B0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52208,
                "parent_id" => 51380,
                "position" => "Программист 1С",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021827AFAE",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52209,
                "parent_id" => 10058,
                "position" => "Инженер - технолог молочного производства",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000025733F000004AED7E00000981B80",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52210,
                "parent_id" => 51287,
                "position" => "Контент-мейкер ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322B8E50",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52211,
                "parent_id" => 52098,
                "position" => "Бухгалтер ООО 'KD KULIKOV' (г.Ташкент) ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021276EB78",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52212,
                "parent_id" => 10038,
                "position" => "Дирекция логистики",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990D8",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52214,
                "parent_id" => 10010,
                "position" => "ООО 'KD KULIKOV' (г. Ташкент)",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832A0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52215,
                "parent_id" => 10114,
                "position" => "Менеджер отдела хранения",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000990EAE56CA0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52216,
                "parent_id" => 51349,
                "position" => "фывфыв",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095C8FC00010891FF800021827EB58",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52217,
                "parent_id" => 51356,
                "position" => "test",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991AD95AC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52218,
                "parent_id" => 51356,
                "position" => "test",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991AD95B4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52219,
                "parent_id" => 51356,
                "position" => "asdasd",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991AD95BC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52220,
                "parent_id" => 51356,
                "position" => "asdasd",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991AD95C2",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52221,
                "parent_id" => 51356,
                "position" => "asdasd",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991AD95C6",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52222,
                "parent_id" => 51356,
                "position" => "asdasd",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991AD95CA",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52223,
                "parent_id" => 51356,
                "position" => "asdasd",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991AD95CE",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52224,
                "parent_id" => 51356,
                "position" => 123123123,
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991AD95D1",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52225,
                "parent_id" => 51356,
                "position" => 213123,
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991AD95D3",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52226,
                "parent_id" => 51356,
                "position" => "test",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991AD95D5",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52227,
                "parent_id" => 51356,
                "position" => "test",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991AD95D7",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52228,
                "parent_id" => 10094,
                "position" => "Менеджер по развитию",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC910",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52229,
                "parent_id" => 40197,
                "position" => "Отдел по технической безопасности",
                "status" => -1,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990FADE",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52230,
                "parent_id" => 10038,
                "position" => "Отдел по технике безопасности и охране труда",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095D8AFE00000990F8",
                "department_id" => 0,
                "register_contacts" => 52230,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52231,
                "parent_id" => 10010,
                "position" => "Дирекция фирменной сети Бишкек",
                "status" => 0,

                "is_department" => 1,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832E0",
                "department_id" => 0,
                "register_contacts" => 52231,
                "department_hr" => 1
            ],
            [
                "id" => 52232,
                "parent_id" => 51356,
                "position" => "test",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991AD95D9",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52233,
                "parent_id" => 51215,
                "position" => "Бухгалтер-кассир",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CBFC000012AB3F800021276AB8C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52234,
                "parent_id" => 52166,
                "position" => "ФМ 'Акай сити'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832AB5C20",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52235,
                "parent_id" => 51356,
                "position" => "ыва",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991AD95DB",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52236,
                "parent_id" => 51356,
                "position" => "тест",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991AD95DD",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52237,
                "parent_id" => 51356,
                "position" => "test",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991AD95DF",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52238,
                "parent_id" => 51356,
                "position" => "asdasd",
                "status" => -1,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE00000991AD95E088",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52239,
                "parent_id" => 52040,
                "position" => "Инспектор по экономической безопасности",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE0000844C8BC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52240,
                "parent_id" => 10094,
                "position" => "Юрист ООО 'Куликовский Новосибирск'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F8000218322BC930",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52241,
                "parent_id" => 51611,
                "position" => "Главный механик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DB2F0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52242,
                "parent_id" => 51611,
                "position" => "Главный механик",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5C6DB308",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52243,
                "parent_id" => 51488,
                "position" => "Менеджер магазина  ФМП 'Айгерим'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F4CC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52244,
                "parent_id" => 51488,
                "position" => "Менеджер магазина ФМП 'Кыргаулды'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F4D4",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52245,
                "parent_id" => 52437,
                "position" => "Менеджер магазина 'Non - food'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDAB2AC0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52246,
                "parent_id" => 51275,
                "position" => "Куратор ФС",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832EDC11BA0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52247,
                "parent_id" => 40158,
                "position" => "Специалист 1С ",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE000084458CE0",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52248,
                "parent_id" => 51402,
                "position" => "Тренер по кофе",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF540",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52249,
                "parent_id" => 51984,
                "position" => "Маркетолог",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832ABB6",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52250,
                "parent_id" => 51488,
                "position" => "Менеджер ФМ 'Каскелен 2'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444ACF6F4DC",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52251,
                "parent_id" => 52011,
                "position" => "Заведующий складом ТОО 'Куликовский Казахстан'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5D3F800018266BF0000304EEFE00008444EB6568",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52252,
                "parent_id" => 51984,
                "position" => "Сервис - менеджер ООО 'KD KULIKOV'",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095CCFC000012A35F800021832ABBA",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52253,
                "parent_id" => 40802,
                "position" => "Охранник - контролер КПП",
                "status" => 0,

                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C64C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52254,
                "parent_id" => 40802,
                "position" => "Охранник - контролер КПП",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C654",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52255,
                "parent_id" => 40802,
                "position" => "Охранник - контролер КПП",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095D8AFE0000098DBAFE00008449FFC00010B095F800021612BF000042C65C",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52256,
                "parent_id" => 51899,
                "position" => "Специалист",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B193F8000026137F000042C845764",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ],
            [
                "id" => 52257,
                "parent_id" => 40844,
                "position" => "Сотрудник",
                "status" => 0,
                "is_department" => 0,
                "hid" => "0x5BFE0000095C9FC000012B11F8000026177F000004C27FE00000984DFC00010B195F800021632FF000042C6E7E0000860188",
                "department_id" => 0,
                "register_contacts" => 0,
                "department_hr" => "NULL"
            ]
        ];
        foreach ($users_struct as $user_struct)
            UserStruct::create($user_struct);
    }
}
