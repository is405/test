
public class Test {

	public static void main(String[] args) {
		Person taro = new Person();
		taro.name = "山田太郎";
		taro.age = 20;
		taro.phoneNumber = "1111";
		taro.address = "上野";
		System.out.println(taro.name);
		System.out.println(taro.age);
		System.out.println(taro.phoneNumber);
		System.out.println(taro.address);
		taro.talk();
		
		
		Person jiro = new Person();
		jiro.name = "木村次郎";
		jiro.age = 18;
		jiro.phoneNumber = "2222";
		jiro.address = "新宿";
		System.out.println(jiro.name);
		System.out.println(jiro.age);
		System.out.println(jiro.phoneNumber);
		System.out.println(jiro.address);
		jiro.walk();
		
		
		Person hanako = new Person();
		hanako.name = "鈴木花子";
		hanako.age = 16;
		hanako.phoneNumber = "3333";
		hanako.address = "国分寺";
		System.out.println(hanako.name);
		System.out.println(hanako.age);
		System.out.println(hanako.phoneNumber);
		System.out.println(hanako.address);
		hanako.run();
		
		
		Robot aibo = new Robot();
		aibo.name = "aibo";
		aibo.run();
		
		
		Robot asimo = new Robot();
		asimo.name = "asimo";
		asimo.walk();
		
		
		Robot pepper = new Robot();
		pepper.name = "pepper";
		pepper.talk();
	}
}
