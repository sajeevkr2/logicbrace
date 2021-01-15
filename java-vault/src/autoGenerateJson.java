import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class autoGenerateJson {
    public static void main(String[] args) throws IOException {
        String inputVal;
        String input;
        char inputChar;
        char[] inputString;
        boolean isPresent = false;
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
        System.out.println("Enter the value :");
        inputVal = br.readLine();
        System.out.println("Enter the character :");
        input = br.readLine();
        if (input.length() == 1) {
            inputChar = input.charAt(0);
            System.out.println(inputVal.contains(String.valueOf(inputChar)));
            inputString = inputVal.toCharArray();
            for (int i = 0; i < inputVal.length(); i++) {
                if (inputString[i] == inputChar) {
                    isPresent = true;
                    break;
                }
            }
            System.out.println("Is char present in the String:" + isPresent);
        }else {
            System.out.println("Please enter a single character.");
        }
    }
}
