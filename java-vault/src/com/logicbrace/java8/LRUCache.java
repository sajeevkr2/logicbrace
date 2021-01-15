package com.logicbrace.java8;

import java.util.HashMap;
import java.util.Map;

class Node {
    int value;
    int key;
    Node prev;
    Node next;
}

public class LRUCache {

    Map<Integer, Node> lruCache;
    Node start;
    Node end;
    private int capacity;

    public LRUCache(int capacity) {
        lruCache = new HashMap<Integer, Node>();
        this.capacity = capacity;
    }

    public int get(int key) {
        if (lruCache.containsKey(key)) {
            Node node = lruCache.get(key);
            removeNode(node);
            addAtTop(node);
            return node.value;
        }
        return -1;
    }

    public void put(int key, int value) {
        if (lruCache.containsKey(key)) {
            Node oldNode = lruCache.get(key);
            oldNode.value = value;
            removeNode(oldNode);
            addAtTop(oldNode);
        } else {
            Node newNode = new Node();
            newNode.prev = null;
            newNode.next = null;
            newNode.value = value;
            newNode.key = key;
            if (lruCache.size() >= capacity) {
                lruCache.remove(end.key);
                removeNode(end);
                addAtTop(newNode);

            } else {
                addAtTop(newNode);
            }

            lruCache.put(key, newNode);
        }
    }

    public void addAtTop(Node node) {
        node.next = start;
        node.prev = null;
        if (start != null) {
            start.prev = node;
        }
        start = node;
        if (end == null) {
            end = start;
        }
    }

    public void removeNode(Node node) {

        if (node.prev != null) {
            node.prev.next = node.next;
        } else {
            start = node.next;
        }

        if (node.next != null) {
            node.next.prev = node.prev;
        } else {
            end = node.prev;
        }
    }

    public static void main(String[] args) {
        LRUCache cache = new LRUCache(2);

        cache.put(1, 100);
        cache.put(2, 200);
        cache.get(1); // returns 100
        System.out.println(cache.get(1));
        cache.put(3, 300); // removes key 2
        cache.get(2); // returns -1 (not found)
        System.out.println(cache.get(2));
        cache.put(4, 400); // removes key 1
        cache.get(1); // returns -1 (not found)
        System.out.println(cache.get(1));
        cache.get(3); // returns 300
        System.out.println(cache.get(3));
        cache.get(4); // returns 400
        System.out.println(cache.get(4));

    }
}
