public class Symbols {
    public static void main(String[] args) {
        System.out.println("Выводим всю таблицу ASCII символов:");
        int[] myArray = new int[256];
        for (int i = 0; i < 256; i++) {
            myArray[i] = ((char) (i));
            System.out.println("IN CHR - " + (char) (i) + "\t" + "|" + " IN DEC - " + myArray[i] + "\t" + "|" + " IN HEC - " + Integer.toHexString(myArray[i]));
        }
    }
}
