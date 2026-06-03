# BU MIS Unified Suite — हिंदी परिचय

**BU MIS Unified Suite** एक WordPress आधारित Library MIS Dashboard है, जिसका उद्देश्य library operations, repository analytics, OJS publications, GD room bookings, plagiarism checking workflow और AI-based dashboard summary को एक ही platform पर लाना है।

## मुख्य उद्देश्य

- Library data को एक जगह visualize करना
- Koha, DSpace, OJS और अन्य library services को integrate करना
- Staff और administration के लिए decision-support dashboard बनाना
- Public read-only MIS dashboard देना
- Research paper और GitHub publication के लिए reusable plugin architecture बनाना

## इसमें आप अपना code कहाँ add करेंगे?

```text
bu-mis-unified-suite.php        main plugin file
includes/                      module classes
templates/                     dashboard templates
assets/css/                    stylesheets
assets/js/                     JavaScript files
sample-data/                   demo JSON/CSV data
docs/                          documentation
```

## GitHub पर डालने से पहले

1. API key remove करें  
2. Internal IP जैसे 10.x.x.x replace करें  
3. Password/token हटाएँ  
4. Backup files `.bak`, `.disabled`, `.zip` remove करें  
5. README और SECURITY file जरूर रखें  
