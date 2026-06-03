# Architecture

BU MIS Unified Suite follows a modular WordPress plugin architecture.

## Layers

1. Data Source Layer  
   Koha, DSpace, OJS, PTC, GD Room, Plagiarism workflow.

2. Data Collection Layer  
   REST APIs, WordPress AJAX, SQL/JSON connectors, scheduled refresh.

3. Processing Layer  
   KPI aggregation, filtering, date-wise processing, service grouping.

4. Presentation Layer  
   WordPress admin dashboard and public read-only dashboard.

5. Decision Support Layer  
   Management insights, service monitoring, accreditation reporting, AI summary.

## Recommended Module Classes

```text
class-bu-mis-koha.php
class-bu-mis-ptc.php
class-bu-mis-dspace.php
class-bu-mis-ojs.php
class-bu-mis-gd-room.php
class-bu-mis-plagiarism.php
class-bu-mis-ai.php
```
