package com.logicbrace.java7.map;

import java.util.HashMap;
import java.util.Iterator;
import java.util.Map;
import java.util.concurrent.ConcurrentHashMap;

public class IteratorExample {

    public static void main(String[] args){
        Map<Integer, String> map = new ConcurrentHashMap<>();
        map.put(1,"a");
        map.put(2,"b");
        map.put(3,"c");
        map.put(4,"d");
        map.put(5,"e");
        map.put(6,"f");

        Iterator<Map.Entry<Integer,String>> itr = map.entrySet().iterator();

//        while(itr.hasNext()){
//            if(itr.next().getValue().equalsIgnoreCase("c")){
//                map.remove(3);
//            }
//            System.out.println(itr. .getValue());
//        }

        for(Map.Entry<Integer,String> mapVal : map.entrySet()){
            if(mapVal.getValue().equalsIgnoreCase("c")){
                map.remove(mapVal.getKey());
            }
            System.out.println(mapVal.getValue());
        }




    }
}

