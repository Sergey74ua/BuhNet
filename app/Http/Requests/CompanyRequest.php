<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'inn'               =>  'required|min:10|max:12',
            'name'              =>  'min:3|max:255',
            'status'            =>  'max:7',
            'taxation'          =>  '', //'min:3|max:4'
            'kpp'               =>  'digits:9',
            'ogrn'              =>  'min:13|max:15',
            'okfs'              =>  'digits:2',
            'okved'             =>  'min:1|max:6',
            'ifns'              =>  'digits:4',
            'okpo'              =>  'min:8|max:10',
            'okopf'             =>  'digits:5',
            'okogu'             =>  'digits:7',
            'oktmo'             =>  'digits:11',
            'okato'             =>  'digits:11',
            'pfr'               =>  'digits:12',
            'fss'               =>  'digits:10',
            'bik'               =>  'digits:9',
            'account'           =>  'digits:20',
            'phone'             =>  'min:4|max:15',
            'opening'           =>  'date',
            'table_units'       =>  'required|min:1|max:255', //СКРИПТ
            'table_operation'   =>  'required|min:1|max:255', //СКРИПТ
            'fullname'          =>  'min:3|max:255',
            'email'             =>  'email',
            'director'          =>  'max:255',
            'rank'              =>  'max:255',
            'certificate'       =>  'max:255',
            'address'           =>  'max:255',
            'founder'           =>  'max:255',
            'registrar'         =>  'max:255',
            'logo'              =>  'image',
            'photo'             =>  'image',
            'description'       =>  'max:255'
        ];
    }

    public function attributes()
    {
        return [
            'inn'               =>  '"ИНН"',
            'name'              =>  '"Наименование"',
            'status'            =>  '"Статус"',
            'taxation'          =>  '"Налогообложение"',
            'kpp'               =>  '"КПП"',
            'ogrn'              =>  '"ОГРН"',
            'okfs'              =>  '"ОКФС"',
            'okved'             =>  '"ОКВЕД"',
            'ifns'              =>  '"ИФНС"',
            'okpo'              =>  '"ОКПО"',
            'okopf'             =>  '"ОКОПФ"',
            'okogu'             =>  '"ОКОГУ"',
            'oktmo'             =>  '"ОКТМО"',
            'okato'             =>  '"ОКАТО"',
            'pfr'               =>  '"ПФР"',
            'fss'               =>  '"ФСС"',
            'bik'               =>  '"БИК"',
            'account'           =>  '"Рассчетный счет"',
            'phone'             =>  '"Телефон"',
            'opening'           =>  '"Дата регистрации"',
            'fullname'          =>  '"Полное наименование предприятия"',
            'email'             =>  '"email"',
            'director'          =>  '"Фамилия Имя Отчество руководителя"',
            'rank'              =>  '"Наименование должности руководителя"',
            'certificate'       =>  '"Основание полномочий"',
            'address'           =>  '"Юридический адрес"',
            'founder'           =>  '"Владелец"',
            'registrar'         =>  '"Государственная регистрация"',
            'logo'              =>  '"Логотип"',
            'photo'             =>  '"Фото"',
            'description'       =>  '"Деятельность предприятия"'
        ];
    }

    public function messages()
    {
        return [
            'table_units.required'       =>  'Внутренняя ошибка - администратор компании должен заполнится автоматически',
            'table_operation.required'   =>  'Внутренняя ошибка - данные компании должны заполнятся автоматически',
        ];
    }
}