package com.logicbrace.designPattern;

import java.time.LocalTime;
import java.time.ZoneOffset;
import java.time.ZonedDateTime;
import java.time.chrono.ChronoLocalDateTime;
import java.time.chrono.ChronoZonedDateTime;
import java.time.chrono.MinguoDate;
import java.time.temporal.ChronoUnit;
import java.util.Locale;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.time.LocalDateTime;
import java.time.ZoneId;
import java.time.ZonedDateTime;
import java.time.format.DateTimeFormatter;

public class CustomMain {

    private static final String DATE_FORMAT = "dd-M-yyyy hh:mm:ss a";

    public static void main(String[] args) {
        float a=-3;
        float b=10;
        System.out.println(b+a);

//        String dateInString = "22-1-2015 10:15:55 AM";
//        LocalDateTime ldt = LocalDateTime.parse(dateInString, DateTimeFormatter.ofPattern(DATE_FORMAT));
//
//        ZoneId singaporeZoneId = ZoneId.of("Asia/Singapore");
//        System.out.println("TimeZone : " + singaporeZoneId);
//
//        //LocalDateTime + ZoneId = ZonedDateTime
//        ZonedDateTime asiaZonedDateTime = ldt.atZone(singaporeZoneId);
//        System.out.println("Date (Singapore) : " + asiaZonedDateTime);
//
//        ZoneId newYokZoneId = ZoneId.of("America/New_York");
//        System.out.println("TimeZone : " + newYokZoneId);
//
//        ZonedDateTime nyDateTime = asiaZonedDateTime.withZobacneSameInstant(newYokZoneId);
//        System.out.println("Date (New York) : " + nyDateTime);
//
//        DateTimeFormatter format = DateTimeFormatter.ofPattern(DATE_FORMAT);
//        System.out.println("\n---DateTimeFormatter---");
//        System.out.println("Date (Singapore) : " + format.format(asiaZonedDateTime));
//        System.out.println("Date (New York) : " + format.format(nyDateTime));
//        
//        //LocalDateTime.parse(new String("01-22-2015 10:15:55 AM"), DateTimeFormatter.ISO_LOCAL_DATE_TIME.withZone(ZoneId.of("America/Los_Angeles")));
//        ZonedDateTime ldt1 = LocalDateTime.parse("Dec 15,2020 00:00:00 AM", DateTimeFormatter.ofPattern("MMM dd,yyyy HH:mm:ss a")).atZone(ZoneId.of("America/Los_Angeles"));
//        System.out.println(ldt1);
//
//        System.out.println((LocalDateTime.parse(ldt1.toString(), DateTimeFormatter.ofPattern("MMM dd,yyyy HH:mm:ss a"))).atZone(ZoneId.of("America/Los_Angeles")));
        System.out.println(LocalDateTime.now());
        try {
			System.out.println(new SimpleDateFormat("dd/MM/yyyy", Locale.US).parse("2020-10-04T12:10-08:00[GMT-08:00]"));
		} catch (ParseException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

    }

}

