import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.lang.reflect.Array;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Map;
import java.util.concurrent.ConcurrentHashMap;
import java.util.stream.Collectors;

public class TestB  {

//    public void Run(){
//        System.out.println("TestB");
//    }

    public static void main(String[] args){
        Map<String, String> map = new ConcurrentHashMap<>();
//        map.put("a", "b");
//        map.put("c", "d");
//        map.put("e", "f");
//
//        Collections.
        map.forEach((k,v) -> {
            if(k.equalsIgnoreCase("c")){
                map.remove("c");
            }
            System.out.println(v);
        });
//
//        Iterator iterator = map.entrySet().iterator();

//        while(iterator.hasNext()){
//            if((iterator.next().toString()).equalsIgnoreCase(("c"))){
//                map.remove("c");
//            }
//            System.out.println(iterator.next());
//        }

//        Test t = new TestB();
//        t.run();
//        throw new TestException("erro");

        ArrayList<Integer> arrayList = new ArrayList<>(Arrays.asList(1,2,3,4));
        ArrayList<String> resultArr = new ArrayList<>(Arrays.asList("a","b"));

//        arrayList.add("a");
//        arrayList.add("b");
//        arrayList.add("c");

        arrayList.stream().forEach(System.out::println);

    }
}
