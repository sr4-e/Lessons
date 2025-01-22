**Const and Static**

في PHP، كل من const و static يُستخدمان لتعريف خصائص معينة في الكود، لكن لهما وظائف وسلوكيات مختلفة. إليك الفرق بينهما:

1. const:
الوظيفة: تُستخدم لتعريف قيم ثابتة (ثوابت) لا يمكن تغييرها بعد تعيينها.
استخدامها: يمكن استخدامها فقط داخل الكلاسات أو في السياق العام خارج الكلاس.
الثوابت: لا تحتاج إلى كائن للوصول إليها (يمكن الوصول إليها مباشرة عبر اسم الكلاس أو باستخدام self داخل الكلاس).
التغيير: قيم الثوابت ثابتة طوال مدة تنفيذ البرنامج، ولا يمكن تعديلها.
القيود:
الثوابت لا يمكن أن تحتوي على متغيرات أو تعبيرات متغيرة.
لا يمكن تعديل قيمة الثابت بعد تحديدها.
2. static:
الوظيفة: تُستخدم لتعريف خصائص أو دوال ثابتة داخل الكلاس يمكن الوصول إليها دون الحاجة إلى إنشاء كائن من الكلاس.
استخدامها: تُستخدم مع الخصائص والدوال داخل الكلاس. لا تحتاج إلى كائن للوصول إليها ولكن يمكنك الوصول إليها باستخدام ::.
السلوك: عندما يتم تعريف خاصية أو دالة كـ static، فإنها تصبح مشتركة بين جميع الكائنات من نفس الكلاس، أي أن لها نفس القيمة لكل الكائنات.
التغيير: يمكن تعديل قيم الخصائص الثابتة.
القيود:
لا يمكن الوصول إلى خصائص أو دوال static باستخدام $this (لأنها لا تنتمي إلى كائنات معينة).
يمكن تعديل قيمها.

const: Used to define constants that cannot be changed after they are assigned, and they can be accessed without needing to instantiate an object.
static: Used to define properties or methods that can be modified and are shared across all instances of the same class.

**Magic Methods**
Magic methods in PHP are special methods that start with double underscores (__) and are automatically invoked in specific scenarios. Here are the most common ones:

Common Magic Methods:
__construct(): Initializes the object.
__destruct(): Cleans up when the object is destroyed.
__get(): Accesses undefined or private properties.
__set(): Sets undefined or private properties.
__call(): Handles calls to undefined methods.
__toString(): Converts the object to a string.
__clone(): Defines how an object is cloned.


**Magic Variables**
Magic variables in PHP are special predefined constants that start and end with double underscores (__). They provide useful information during runtime.

Common Magic Variables:
__LINE__: The current line number in the script.
__FILE__: The full path and filename of the current file.
__DIR__: The directory of the current file.
__FUNCTION__: The name of the current function.
__CLASS__: The name of the current class.
__METHOD__: The name of the current method in the class.
__NAMESPACE__: The name of the current namespace (if defined).

