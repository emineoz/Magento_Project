Magento projemin vendor name'i Emine modül name'i ise Blog.

Projemizin genel amacı bir veritabanı oluşturup oluşturulan veritabanından çekilen verileri bir frontend tarafında listelenmesi bir de admin panalinde menü kısmında vendor name adı altında modül adına tıklanıldığında çekilen verilerin listelenmesiydi.

Veritabanı oluşturmak için etc altında db_schema.xml dosyası oluşturdum bu dosyada veritabanı configürasyonlarını yaptım ve oluşturduğum tablonun içini phpMyAdminden manuel olarak doldurdum.

![image](https://user-images.githubusercontent.com/71029128/194030937-2cd51105-f091-4480-9d88-1fa7e5753dda.png)

Oluşturulan veritabanından verileri admin panelinde görebilmek için adminhtml altından menü.xml doyası ve menü tagı altına "Emine" adında title oluşturdum daha sonra aynı şekilde "Blog" adında title oluşturdum. Action olarak gitmesini istediğim url'i yazdım ve "Emine" altında olacağı için parent name'ini "Emine" nin resource ü olarak tanımladım.

![image](https://user-images.githubusercontent.com/71029128/193889290-07df8e3c-bfe9-4e4d-8108-dd1bfaa4951e.png)


Blog butonuna tıkladığımızda istediğimiz route a gidebilmesi için adminhtml altında routes.html adında dosya ve controller/adminhtml/post/index.php dosyası oluşturdum.
Controllerımın çalıştığını teyit ettikten sonra verileri çekmek için etc altında di.xml doysası oluşturdum.Database bağlantılarını yapabilmek için üç farklı dosyaya ihtiyaç vardı ; Model/Blog.php, Model/ResourceMdel/Blog.php , Model/ResourceMdel/Collection.php dosyalarını oluşturdum ve layoutumu , view/adminhtml/ui_component dosyamı da oluşturktan sonra admin panelinde yan menüde Emine altında Blog butonuna tıkladığımda çektiğim verileri gördüm. 

![image](https://user-images.githubusercontent.com/71029128/193892814-2c48ba07-c4a3-4fb8-84e6-3bf54da0e10e.png)

Veritabanından çektiğim verileri frontend kısmında da görebilmek için etc/frontend klasörü altında route tanımlaması yaptım  ve sonra controller oluşturdum.Magento xml'ler ile layout kısmını oluşturduğu için bir index.xml dosyası oluşturdum.Verileri çekmek için databse bağlantısı yaptım bunun için phtml datasını besleyecek katman olan block klasörünün altında index.php dosyasını oluşturdum.Bu klasörde database bağlantısını yaptım ve en son template altında phtml dosyasında verilerimi çekme işlemi yaptım.

![image](https://user-images.githubusercontent.com/71029128/193897167-70033a30-e370-4fd9-a38b-5d632adfcb52.png)
 
