
public class Test {
public static void main(String[]args){

	Person taro=new Person();
	taro.name="saburo";
	taro.age=0;
	System.out.println(taro.name);
	System.out.println(taro.age);

	Person jiro=new Person("名前なし",25);
	System.out.println(jiro.name);
	System.out.println(jiro.age);

	Person hanako=new Person();
	hanako.name="hanako";
	hanako.age=17;
	System.out.println(hanako.name);
	System.out.println(hanako.age);
}
}
