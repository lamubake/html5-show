<?php
namespace Home\Controller;
use Think\Controller;
 
class FontsController extends Controller {
    public function myfonts(){
        echo  '{"success":true,"code":200,"msg":"操作成功","obj":null,"map":null,"list":[{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":44,"buyTime":"2016-05-04","status":1,"sort":0,"license":0,"name":"站酷高端黑","price":0,"fontType":1,"ttfPath":"group4/M00/58/BC/yq0KYFb4ic2AeYZdADxOnHdwBQY313.ttf","woffPath":"group4/M00/58/BC/yq0KYFb4ic2AW9TWABvBDC0QkJ036.woff","fontFamily":"zhanku_gdh"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":8,"buyTime":"2016-05-04","status":0,"sort":0,"license":0,"name":"汉仪中圆体","price":0,"fontType":3,"ttfPath":"group3/M00/A4/C0/yq0KZFbYJaWAdtkcAEDxLNGAnZI555.ttf","woffPath":"group3/M00/A4/C0/yq0KZFbYJaWAdcr2AC2znGfCGso23.woff","fontFamily":"hanyi_zhyt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":9,"buyTime":"2016-05-04","status":0,"sort":0,"license":0,"name":"微软雅黑","price":0,"fontType":0,"ttfPath":"group2/M00/27/7A/yq0KX1bYJiOAOavvAOWMAFMYDS8627.ttf","woffPath":"group2/M00/26/CC/yq0KXlbYJm6AfKu5AIr3-MMbFMo32.woff","fontFamily":"weiruanyahei"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":10,"buyTime":"2016-05-04","status":0,"sort":0,"license":0,"name":"黑体","price":0,"fontType":0,"ttfPath":"group2/M00/26/D8/yq0KXlbYJrqAR59mACBsVH0YWoQ810.ttf","woffPath":"group2/M00/26/D8/yq0KXlbYJruABPCXABIbNB9-3mY80.woff","fontFamily":"HT"}]}';
    }
	public function info(){
		echo '{"success":true,"code":200,"msg":"操作成功","obj":null,"map":null,"list":[{"id":61,"name":"艺术字","price":0,"companyPrice":0,"bizType":"0","type":3,"ttfPath":"group4/M00/9A/27/yq0KYFb6XWyAXiEEAIoHgAKWb0s711.ttf","woffPath":"group4/M00/8E/7E/yq0KYVb6XXaAJJ7zAFTZsHxDsNA42.woff","simplePath":null,"preWoffPath":"group4/M00/9A/27/yq0KYFb6XWyATgOjAAALyCbNI3M87.woff","preTtfPath":"group4/M00/8E/7E/yq0KYVb6XXWAZgRmAAALyCbNI3M452.ttf","status":0,"createUser":"ff8080814f6eda43014f787b18c02fdd","createTime":1459248531000,"updateTime":1459248531000,"sort":4,"fontFamily":"hanyi_qh35","previewText":"易企秀免费简单好用"}]}';
	}
}

