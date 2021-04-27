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
        return true;  // false - если нужен доступ только при авторизации (почему-то не работает)
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
            'taxation'          =>  'nullable|min:3|max:4',
            'kpp'               =>  'nullable|digits:9',
            'ogrn'              =>  'nullable|min:13|max:15',
            'okfs'              =>  'nullable|digits:2',
            'okved'             =>  'nullable|min:1|max:6',
            'ifns'              =>  'nullable|digits:4',
            'okpo'              =>  'nullable|min:8|max:10',
            'okopf'             =>  'nullable|digits:5',
            'okogu'             =>  'nullable|digits:7',
            'oktmo'             =>  'nullable|digits:11',
            'okato'             =>  'nullable|digits:11',
            'pfr'               =>  'nullable|digits:12',
            'fss'               =>  'nullable|digits:10',
            'bik'               =>  'nullable|digits:9',
            'account'           =>  'nullable|digits:20',
            'phone'             =>  'nullable|min:4|max:15',
            'opening'           =>  'nullable|date',
            'fullname'          =>  'nullable|min:3|max:255',
            'email'             =>  'nullable|email',
            'director'          =>  'nullable|max:255',
            'rank'              =>  'nullable|max:255',
            'certificate'       =>  'nullable|max:255',
            'address'           =>  'nullable|max:255',
            'founder'           =>  'nullable|max:255',
            'registrar'         =>  'nullable|max:255',
            'logo'              =>  'nullable|image',
            'photo'             =>  'nullable|image',
            'description'       =>  'nullable|max:255'

            //'status'            =>  'max:7',
            //'table_units'       =>  'required|min:1|max:255',
            //'table_operation'   =>  'required|min:1|max:255',
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
