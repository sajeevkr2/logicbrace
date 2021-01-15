package com.logicbrace.strings;

import java.util.Arrays;
import java.util.HashSet;
import java.util.Set;

public class TestDomeQuestion {
     private static String[] uniqueNames(String[] names1, String[] names2) {
        Set<String> set = new HashSet<>();
         set.addAll(Arrays.asList(names1));
         set.addAll(Arrays.asList(names2));
        return set.toArray(new String[0]);
    }

    public static void main(String[] args) {
        String[] names1 = new String[] {"Ava", "Emma", "Olivia"};
        String[] names2 = new String[] {"Olivia", "Sophia", "Emma"};
        System.out.println(String.join(", ", TestDomeQuestion.uniqueNames(names1, names2))); // should print Ava, Emma, Olivia, Sophia
    }

}
