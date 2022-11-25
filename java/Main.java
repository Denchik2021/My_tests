import java.util.Scanner;


public class Main {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.println("Введите оценку студента: ");
        int grade = input.nextInt();

        if (grade >= 85 && grade <= 100) {
            System.out.println("Оценка студента - A");
        } else if (grade >= 69 && grade <= 84) {
            System.out.println("Оценка студента - B");
        } else if (grade >= 52 && grade <= 68) {
            System.out.println("Оценка студента - C");
        } else if (grade >= 38 && grade <= 51) {
            System.out.println("Оценка студента - D");
        } else if (grade >= 20 && grade <= 37) {
            System.out.println("Оценка студента - E");
        } else if (grade >= 0 && grade <= 19) {
            System.out.println("Оценка студента - F");
        }
            else {
                System.out.println("Ошибка ввода");
        }
    }
}






