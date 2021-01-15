import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.List;
import java.util.stream.Stream;

public class Test {

   public static void main(String[] args){
       List<Value> values = new ArrayList<>();
       ArrayList<Integer> arr = new ArrayList<Integer>();
       arr.add(1);
       arr.add(3);
       arr.add(-5);
       arr.add(7);
       arr.add(8);
       arr.add(20);
       arr.add(-40);
       arr.add(6);

       arr.forEach(v->{
           arr.forEach(v1 ->{
                values.add(new Value(v + v1, v, v1));
           }
           );
       });

       values.sort(Collections.reverseOrder());
       values.forEach(value -> {
           System.out.println(value.getClosestVal());
       });
   }

}

