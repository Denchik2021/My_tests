import java.math.*;
import java.util.Scanner;

public class Betta {
    public static void main(String[] args){
        System.out.println("Введите угол для синуса в 1 четверти градусах");
        Scanner input = new Scanner(System.in);
        int angle = input.nextInt();
        if (angle >= 0 && angle <= 90) {
            System.out.println(Math.sin(Math.toRadians(angle)));
        }   else  {
            System.out.println("Неправильно введенный угол");
        }
    }
}

