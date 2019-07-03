<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersInsertRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    //给校验请求类授权(必须)
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    
    //设置规则
    public function rules()
    {
        return [
            //用户名规则,不能为空,多个规则用|隔开,/\w{4,8}/(正则判断),unique:唯一规则,参数是表名
            'username'=>'required|regex:/\w{4,8}/|unique:userss',
            //密码规则
            'password'=>'required|regex:/\w{6,18}/',
            //重复密码规则(same:验证值是否一致,参数为要验证的值)
            'repassword'=>'required|regex:/\w{6,18}/|same:password',
            //邮箱规则(email:邮箱专用规则)
            'email'=>'required|email|unique:userss',
            //电话规则
            'phone'=>'required|regex:/\d{11}/|unique:userss',
        ];
    }
    //自定义错误信息
    public function messages(){
        return [
            //自定义用户名的错误信息
            'username.required'=>'用户名不能为空',
            'username.regex'=>'用户名必须是4到8个字符组成',
            'username.unique'=>'用户名已经存在',
            'password.required'=>'密码不能为空',
            'password.regex'=>'密码必须是4到8个字符组成',
            'repassword.required'=>'重复密码不能为空',
            'repassword.regex'=>'重复密码必须是4到8个字符组成',
            'repassword.same'=>'重复密码与密码不一致',
            'email.required'=>'邮箱不能为空',
            'email.email'=>'不符合邮箱格式',
            'email.unique'=>'邮箱已经存在',
            'phone.required'=>'电话不能为空',
            'phone.regex'=>'不符合电话格式',
            'phone.unique'=>'电话已经存在',
        ];
    }
}
