@extends('layouts.app-labour')

@section('content')
    <div id="animation-carousel" class="relative w-full mx-auto max-w-screen-xl" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <div class="duration-200 ease-linear" data-carousel-item style="display: block;">
                <img src="./carousel/FQA.webp"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
    </div>


    <section class="bg-white py-8 antialiased  md:py-16">
        <div class="mx-auto max-w-screen-lg px-4 2xl:px-0">
          <div class="lg:flex lg:items-center lg:justify-between lg:gap-4">
            <h2 class="shrink-0 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">ถามตอบ ข้อสงสัยเกี่ยวกับแรงงานต่างด้าว ?</h2>
      
          
          </div>
      
          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-200 dark:divide-gray-800">
              <div class="space-y-4 py-6 md:py-8">
                <div class="grid gap-4">
                  <div>
                    <span class="inline-block rounded bg-blue-900 px-2.5 py-0.5 text-xs font-medium text-white dark:bg-green-900 dark:text-green-300 md:mb-0">คุณถาม </span>
                  </div>
                  <p class="text-xl font-semibold text-gray-900 hover:underline dark:text-white">“การนำเข้าแรงงานต่างด้าวจำเป็นต้องใช้บริษัท นำคนต่างด้าวมาทำงานในประเทศ หรือไม่ ?”</p>
                </div>
                <span class="inline-block rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300 md:mb-0">เราตอบ </span>
                <p class="text-base font-normal text-gray-900 dark:text-gray-400">การนำเข้าแรงงานต่างด้าว ทั้ง 3 สัญชาติ มาทำงานในประเทศ ทางนายจ้างสามารถดำเนินการด้วย  ได้  2 กรณี </p>
                <p class="text-base font-normal text-gray-900 dark:text-gray-400"><b>A :</b>  ตนเองได้ โดยยื่นเอกสารที่สำนักงานจัดหางาน จังหวัด และจัดเตรียมเอกสารตามกระบวนการ ซึ่งจะต้องมีการวางประกันการจ้างแรงงานต่างด้าว ตามมาตรา 46</p>
                <p class="text-base font-normal text-gray-900 dark:text-gray-400"><b>B :</b> หรือสามารถใช้บริการจากบริษัท นำคนต่างด้าวมาทำงานในประเทศ ที่จดทะเบียนถูกต้องกับกรมการจัดหางานได้ ซึ่งจะมีความน่าเชื่อถือ กว่า บริษัทที่ไม่ได้จดทะเบียน</p>
              </div>

              <div class="space-y-4 py-6 md:py-8">
                <div class="grid gap-4">
                  <div>
                    <span class="inline-block rounded bg-blue-900 px-2.5 py-0.5 text-xs font-medium text-white dark:bg-green-900 dark:text-green-300 md:mb-0">คุณถาม </span>
                  </div>
                  <p class="text-xl font-semibold text-gray-900 hover:underline dark:text-white">“บริษัทนำเข้าแรงงานต่างด้าวหรือนายหน้าต่างกันอย่างไร ?”</p>
                </div>
                <span class="inline-block rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300 md:mb-0">เราตอบ </span>
            
                <p class="text-base font-normal text-gray-900 dark:text-gray-400">
                    บริษัทนำเข้าแรงงานต่างด้าว หรือบริษัทนำเข้าต่างด้าว หากได้รับการจดทะเบียนถูกต้องกับกรมการจัดหางาน จะ มีความน่าเชื่อถือ และ สร้างความมั่นใจ ใจให้กับทางนายจ้าง หรือ ผู้ว่า จ้างได้ เนื่องจากทางบริษัทเหล่านี้จะมีการวางประกันค่าความเสียหายให้กับทางนายจ้างหรือผู้ใช้บริการ จำนวน 5 ล้านบาท  หากไม่ได้รับการดูแลหรือ ทอดทิ้งงาน ทางนายจ้างสามารถ เรียกร้องค่าเสียหายได้ กับทางกรมการจัดหางาน โดยการหักจากเงินประกัน ที่วางไว้  หากนายจ้าง ไปเรียกใช้บริการจากบริษัท หรือนายหน้า เถื่อนที่ไม่ได้รับการรับรองอาจถูก เอารัดเอาเปรียบหรือ ใหม่ ทำงานทอดทิ้ง การทำเอกสาร เป็นเหตุให้แรงงานต่างด้าวไม่ได้รับ เอกสารที่ถูกต้องตามกฎหมายได้
                </p>
              </div>
              
              <div class="space-y-4 py-6 md:py-8">
                <div class="grid gap-4">
                  <div>
                    <span class="inline-block rounded bg-blue-900 px-2.5 py-0.5 text-xs font-medium text-white dark:bg-green-900 dark:text-green-300 md:mb-0">คุณถาม </span>
                  </div>
                  <p class="text-xl font-semibold text-gray-900 hover:underline dark:text-white">“การนำเข้าแรงงานต่างด้าวตามระบบ MOU  กับแรงงานต่างด้าว บัตรชมพู มีความแตกต่างกันอย่างไร และสวัสดิการแตกต่างกันหรือไม่ ?”</p>
                </div>
                <span class="inline-block rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300 md:mb-0">เราตอบ </span>
            
                <p class="text-base font-normal text-gray-900 dark:text-gray-400">
                    แรงงานต่างด้าว ตาม ตามระบบ MOU เป็นแรงงานที่ ต้องรอ ผ่านกระบวนการการนำเข้าให้ถูกต้องเสียก่อน จึงจะ มาทำงานกับทางนายจ้าง ซึ่งจาก สามารถทำงานได้ตั้งแต่วันแรกที่เดินทางเข้ามาถึง เนื่องจากเป็นการเตรียมและยื่นเอกสาร ล่วงหน้า ซึ่งมีความถูกต้องตามกฎหมายอยู่แล้ว ตั้งแต่ต้น
                     ส่วนแรงงานต่างด้าวบัตรชมพูนั้น เป็นแรงงา น ที่อยู่ในประเทศไทย ที่ได้รับการขึ้นทะเบียน หรือจด ทะเบียน ตามมติ ครม. ซึ่งแรงงานบางคนอาจมีสถานะ ยังไม่ถูกต้อง หรือทางนายจ้างจำเป็นต้องไปเปลี่ยนแปลงเอกสารหรือเปลี่ยนนายจ้างให้ถูกต้องเสียก่อนหากสถานะ ของเอกสารแรงงานต่างด้าวบัตรชมพูนั้นยังคงมีสถานะอยู่ แรงงาน วีซ่าขาดหรือใบอนุญาตทำงานขาด โดยมีการแจ้งออกเกิน 60 วัน จนเป็นเหตุที่ทำให้ไม่สามารถเปลี่ยนนายจ้างได้

                </p>
              </div>
               
              <div class="space-y-4 py-6 md:py-8">
                <div class="grid gap-4">
                  <div>
                    <span class="inline-block rounded bg-blue-900 px-2.5 py-0.5 text-xs font-medium text-white dark:bg-green-900 dark:text-green-300 md:mb-0">คุณถาม </span>
                  </div>
                  <p class="text-xl font-semibold text-gray-900 hover:underline dark:text-white">“แรงงานต่างด้าวบัตรชมพู ที่มีการต่ออายุ ตั้งแต่วันที่ 13 กุมภาพันธ์ 2568 จะสามารถเปลี่ยนนายจ้างได้เลยหรือไม่ ?”</p>
                </div>
                <span class="inline-block rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300 md:mb-0">เราตอบ </span>
            
                <p class="text-base font-normal text-gray-900 dark:text-gray-400">
                    แรงงานต่างด้าวกลุ่มบัตรชมพู ตามมติ ครม เมื่อวันที่ 24กันยายน 2567 ที่ผ่านมา เป็นการต่ออายุในลักษณะ MOU หากแรงงานต่างด้าวประสงค์จะเปลี่ยนนายจ้างจำเป็นต้องขออนุญาตนายจ้างโดยยืน แจ้งออก โดยไม่ติดค้างค่าใช้จ่ายจึงจะสามารถเปลี่ยนนายจ้างได้ หากไม่เช่นนั้น สถานะ ของแรงงานต่างด้าวจะกลายเป็น กลุ่มหลบหนี และจะไม่สามารถเปลี่ยนนายจ้างได้ ซึ่งเป็นนโยบายที่ออกมาเพื่อเป็นการปกป้องสิทธิ์ของทางนายจ้างหรือผู้ว่าจ้าง ที่แรงงานต่างด้าวหลบ หนีออกไปเปลี่ยนนายจ้างโดยเสรี
                </p>
              </div>

              <div class="space-y-4 py-6 md:py-8">
                <div class="grid gap-4">
                  <div>
                    <span class="inline-block rounded bg-blue-900 px-2.5 py-0.5 text-xs font-medium text-white dark:bg-green-900 dark:text-green-300 md:mb-0">คุณถาม </span>
                  </div>
                  <p class="text-xl font-semibold text-gray-900 hover:underline dark:text-white">“การต่อวีซ่า แรงงานนำเข้าตามระบบMOU หรือเป็นแรงงา น ที่มีบัตรชมพู หาก หนังสือเดินทาง หมดอายุก่อนจะทำอย่างไร?”</p>
                </div>
                <span class="inline-block rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300 md:mb-0">เราตอบ </span>
            
                <p class="text-base font-normal text-gray-900 dark:text-gray-400">
                    ถ้าอายุของหนังสือเดินทางของแรงงานต่างด้าว มีไม่ถึงตามสิทธิที่สมควรจะได้รับ ให้นายจ้างหรือแรงงานต่างด้าวไปทำหนังสือเดินทางเล่มใหม่ โดยมีการอ้างอิงจากหนังสือเดินทางเล่นเดิม จากนั้นไปทำการย้ายตรา จากเล่มเดิมสู่เล่มใหม่ และไปขอขยายสิทธิ ของวีซ่าตามอายุที่สมควรจะได้รับ ก็สามารถพำนักอยู่ในประเทศไทยได้ตามอายุและสิทธิเดิมที่มีอยู่
                </p>
              </div>

              <div class="space-y-4 py-6 md:py-8">
                <div class="grid gap-4">
                  <div>
                    <span class="inline-block rounded bg-blue-900 px-2.5 py-0.5 text-xs font-medium text-white dark:bg-green-900 dark:text-green-300 md:mb-0">คุณถาม </span>
                  </div>
                  <p class="text-xl font-semibold text-gray-900 hover:underline dark:text-white">“ข้อดีหรือ เสียเปรียบของแรงงานต่างด้าว แบบนำเข้า MOU กับแรงงานกลุ่มมติ ครม (บัตรชมพู)?”</p>
                </div>
                <span class="inline-block rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300 md:mb-0">เราตอบ </span>
            
                <p class="text-base font-normal text-gray-900 dark:text-gray-400">
                    กลุ่ม ต่างด้าว MOU สำหรับแรงงานนำเข้าตามระบบMOU มีข้อดี ตรงที่การเปลี่ยนนายจ้างหรือการโยกย้ายนายจ้างนั้น จะค่อนข้างยุ่งยากและลำบากกว่า เนื่องจาก ขั้นตอนและมีระเบียบที่ชัดเจนหากนายจ้าง ไม่ยินยอมให้เปลี่ยนนายจ้าง ทางแรงงานก็ไม่สามารถไปหานายจ้างอื่นได้ อีกทั้งสามารถคัดสรรแรงงานหรือจำนวนและสัดส่วน เป็นไปตามที่นายจ้างต้องการ
                    <b>แต่มีข้อเสียคือ ใช้ระยะเวลาใน การ ดำเนินการนาน หรืออาจต้องรอเวลา หาก ทางนายจ้างจำเป็นต้องใช้แรงงานด่วนจะไม่ตอบโจทย์เลย</b> กลุ่ม มติ ครม บัตรชมพู แรงงานกลุ่มนี้ ถ้ารับสมัครได้คนมาทำงานเลย ไม่ต้องรอเวลา ตอบโจทย์นายจ้างที่มีความต้องการจ้างแรงงานเร่งด่วน แต่มีข้อเสียคือแรงงาน สามารถเปลี่ยนนายจ้างหรือโยกย้าย ได้อิสระเสรี มีความเสี่ยง เรื่องของการ ออกจากงานค่อนข้างสูง หากสวัสดิการและการดูแลไม่ได้ดี เท่าที่ควร หรือไม่ได้เป็นไปตามความต้องการของ น้องๆ ต่างด้าวกลุ่มนี้ และบางครั้งในการรับสมัคร ก็อาจจะไม่ได้รับสัดส่วนหรือคุณสมบัติตามที่นายจ้างต้องการนัก
                </p>
              </div>

              <div class="space-y-4 py-6 md:py-8">
                <div class="grid gap-4">
                  <div>
                    <span class="inline-block rounded bg-blue-900 px-2.5 py-0.5 text-xs font-medium text-white dark:bg-green-900 dark:text-green-300 md:mb-0">คุณถาม </span>
                  </div>
                  <p class="text-xl font-semibold text-gray-900 hover:underline dark:text-white">“แรงงานต่างด้าว ที่ออกจากงานแล้ว สามารถ แจ้งเข้าได้ภายในกี่วัน ถ้าออกจากทางนายจ้างเก่ามา?”</p>
                </div>
                <span class="inline-block rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300 md:mb-0">เราตอบ </span>
            
                <p class="text-base font-normal text-gray-900 dark:text-gray-400">
                    (ตาม มติ ครม 24 กันยายน 2567) ให้ขยายระยะเวลาการเปลี่ยนนายจ้างตามมาตรา ๕๒ และระยะเวลาการทำงานกับ นายจ้างรายใหม่ตามมาตรา ๕๕ วรรคหนึ่ง สำหรับคนต่างด้าวซึ่งเดินทางเข้ามาทำงางานในราชอาจักร ตามกฎหมายว่าด้วยคนเข้าเมือง ภายใต้บันทึกความตกลงหรือบันทึกความเข้าใจที่รัฐบาลไทยทำไว้กับ รัฐบาลต่างประเทศ เป็นระยะเวลา  60 (หกสิบ) วัน จากเดิม เพียง 30 วันนับแต่วันที่เลิกทำงานกับนายจ้างรายเดิม ทั้งนี้ ตั้งแต่บัดนี้เป็นต้นไป จนถึงวันที่ ๑๓ กุมภาพันธ์ พ.ศ. ๒๕๗๒
                </p>

              </div>

              <div class="space-y-4 py-6 md:py-8">
                <div class="grid gap-4">
                  <div>
                    <span class="inline-block rounded bg-blue-900 px-2.5 py-0.5 text-xs font-medium text-white dark:bg-green-900 dark:text-green-300 md:mb-0">คุณถาม </span>
                  </div>
                  <p class="text-xl font-semibold text-gray-900 hover:underline dark:text-white">“เอกสารของ แรงงาน ต่างด้าวMOU กับ แรงงาน ต่างดาว มติ ครม บัตรชมพู หรือแรงงานต่างด้าวที่ขึ้นทะเบียน ต่างกันอย่างไร?”</p>
                </div>
                <span class="inline-block rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300 md:mb-0">เราตอบ </span>
            
                <p class="text-base font-normal text-gray-900 dark:text-gray-400">
                  - <b>แรงงานต่างด้าวMOU จำเป็นต้องมีเอกสารอยู่ 3 ชนิด</b> จึงจะมีสิทธิ์อยู่ในราชอาณาจักรไทยได้อย่างถูกต้อง คือ  1. หนังสือเดินทาง  2.  วีซ่าที่อยู่ในเล่มหนังสือเดินทาง และ 3. ใบอนุญาตทำงาน ก็ถือว่าครบถ้วน <br>
                  - <b>ส่วนแรงงานต่างด้าวมติ ครม บัตรชม</b>พู หรือแรงงานต่างด้าวที่ขึ้นทะเบียนในประเทศไทย จำเป็นต้องมีเอกสารอยู่ด้วยกัน 4 อย่างคือ  1. หนังสือเดินทางหรือเอกสารที่ใช้แทนหนังสือเดินทางอย่างใดอย่างหนึ่ง   2.ใบอนุญาตทำงาน   3.วีซ่าที่อยู่ในเล่ม หนังสือเดินทางและบัตรชมพู จึงจะถือว่าครบถ้วน แต่ในบางครั้ง ก็ไม่สามารถทำบัตรชมพูได้ ทางแรงงานต่างด้าวจำเป็นต้องมีเอกสารที่ใช้แทนก็คือ ใบ บต50 อ.6  แทนก็ได้


                </p>
                
              </div>


              <div class="space-y-4 py-6 md:py-8">
                <div class="grid gap-4">
                  <div>
                    <span class="inline-block rounded bg-blue-900 px-2.5 py-0.5 text-xs font-medium text-white dark:bg-green-900 dark:text-green-300 md:mb-0">คุณถาม </span>
                  </div>
                  <p class="text-xl font-semibold text-gray-900 hover:underline dark:text-white">“แรงงานต่างด้าวที่อยู่ในประเทศไทยปัจจุบัน มีสิทธิ์อยู่ได้สูงสุดกี่ปี?”</p>
                </div>
                <span class="inline-block rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300 md:mb-0">เราตอบ </span>
            
                <p class="text-base font-normal text-gray-900 dark:text-gray-400">
                    โดยปกติตามพระราชบัญญัติคนเข้าเมือง และตามข้อตกลงของ ทั้ง 2 ประเทศ ในการนำเข้า แรงงานต่างด้าว จะกำหนดอายุของวีซ่าให้คราวๆละ 2 ปี และต่ออายุได้อีกหนึ่งครั้ง รวมตัวทั้งสิ้น 4 ปี แต่ ด้วย สถานการณ์ ทาง การเมือง และ ความ ไม่ สงบ ในบางประเทศ และความจำเป็นเร่งด่วนเพื่อรองรับ การว่าจ้างแรงงานในภาคอุตสาหกรรมที่ยังขาดแคลนแรงงานอยู่  รวมไป ถึง โรคระบาดของโควิดที่ผ่านมา จึงมีการขยาย อายุของวีซ่า หรือการขึ้นทะเบียนให้กับแรงงานต่างด้าว ตามวาระ หรือตามความจำเป็นตลอดมา ทั้งนี้ก็ต้องรอประกาศ จากกรมการจัดหางาน หรือกระทรวงแรงงาน และมติ ครม. เป็นคร่าวคร่าวไป
                </p>
              </div>

              <div class="space-y-4 py-6 md:py-8">
                <div class="grid gap-4">
                  <div>
                    <span class="inline-block rounded bg-blue-900 px-2.5 py-0.5 text-xs font-medium text-white dark:bg-green-900 dark:text-green-300 md:mb-0">คุณถาม </span>
                  </div>
                  <p class="text-xl font-semibold text-gray-900 hover:underline dark:text-white">“ แรงงานกัมพูชาและลาวที่ถือวีซ่าท่องเที่ยวเข้ามาในประเทศ สามารถทำงาน ก่อนได้หรือไม่?”</p>
                </div>
                <span class="inline-block rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300 md:mb-0">เราตอบ </span>
            
                <p class="text-base font-normal text-gray-900 dark:text-gray-400">
                    คำตอบคือไม่ได้ เนื่องจาก วีซ่าของ แรงงานเข้ามา นั้นเป็นวีซ่าท่องเที่ยว หากทางนายจ้าง ต้องการ ให้คนต่างด้าวนั้นทำงานได้อย่างถูกต้อง จำเป็นต้องมีการแปลงสถานะ ของแรงงานต่างด้าว โดย กระบวนการ นำเข้าแรงงานเป็นMOU ให้ถูกต้องเสียก่อน หากมีการตรวจ จับ ทางนายจ้างและแรงงานต่างด้าว จะมีความผิด รวมไปถึงคนต่างด้าวอาจ ถูกขึ้นบัญชีดำ ห้ามเข้าประเทศก็ได้
                </p>
              </div>

              



            </div>
          </div>
      
        
        </div>
      </section>


    <section class="bg-gray-50 py-8">
        <div class="max-w-screen-md mx-auto px-4">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">คำถามที่พบบ่อย ?</h2>
            <div class="divide-y divide-gray-200">
                <!-- Question 1 -->
                <div class="py-4">
                    <button
                        class="w-full text-left flex justify-between items-center text-gray-700 font-medium focus:outline-none"
                        onclick="toggleAccordion(this)">
                        <span>แรงงานกลุ่มMOU นี้ต่างกับแรงงานกลุ่มเดิม ที่อยู่ในประเทศอย่างไร?</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform transform" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pt-2 text-gray-600 text-sm hidden">
                        เป็นแรงงานต่างด้าวเหมือนกัน แต่อาจจะเข้ามาทำงานในประเทศไทย แบบทั้งที่ถูกกฎหมายและผิดกฎหมาย
                        แรงงานที่ถูกกฎหมาย(เคยผิดกฎหมายมาก่อน) นั้น อาจได้รับการอยู่ในประเทศโดยผ่านการขึ้นทะเบียน ทำพาสปอร์ต
                        และบัตรชมพู หรือที่รู้จักกันในนาม แรงงานกลุ่มพิสูจน์สัญชาติ(บัตรชมพู) ซึ่งเดิมกลุ่มที่ครบวีซ่า 4 ปี
                        ต้องกลับไปประเทศต้นทาง เพื่อดำเนินการนำเข้า MOU
                        แต่ด้วยภาวะโรคระบาดเลยเปิดขึ้นทะเบียนในประเทศไทยไปก่อน จนกว่าสถานการณ์จะดีขึ้น
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="py-4">
                    <button
                        class="w-full text-left flex justify-between items-center text-gray-700 font-medium focus:outline-none"
                        onclick="toggleAccordion(this)">
                        <span>ปลอดภัยแค่ไหน กับการจ้างแรงงานกลุ่ม MOU ?</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform transform" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pt-2 text-gray-600 text-sm hidden">
                        ท่านสามารถวางใจได้ แรงงานทุกคนที่บริษัทของเรานำเข้ามาทุกคนนั้น ถูกกฎหมายเอกสารชัดเจน ตรวจสอบได้
                        ตัวแรงงานเองนั้นผ่านการคัดกรอง อบรม และทำความเข้าใจในรายละเอียดงานทุกคน จากภาพงาน และรายละเอียดงาน
                        ที่ทางเราขอจากทางนายจ้าง และอีกประการสำคัญ แรงงานทุกคนมีความคาดหวังกับการทำงาน
                        ต้องการหาเงินเพื่อส่งกลับจุนเจือครอบครัวที่ยากจน ตั้งใจมาทำงาน ไม่สร้างปัญหาและภาระให้กับนายจ้าง
                        จึงปลอดภัยและสบายใจ ว่าใช้แรงงานต่างด้าวถูกกฎหมาย มั่นใจได้ว่าใช้แรงงานกลุ่มนี้ปลอดใต้โต๊ะ
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="py-4">
                    <button
                        class="w-full text-left flex justify-between items-center text-gray-700 font-medium focus:outline-none"
                        onclick="toggleAccordion(this)">
                        <span>นายจ้างต้องทำอย่างไรเมื่อต้องการจ้างแรงงาน MOU ?</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform transform" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pt-2 text-gray-600 text-sm hidden">
                        ไม่ต้องวุ่นวายการยื่นเอกสาร ทุกขั้นตอนการนำเข้าแรงงานนี้ ทาง บนจ.ดิ อิมพอร์ตเตอร์ 168 จำกัด
                        ของเราจะเป็นผู้ดำเนินการให้ทุกขั้นตอน ตลอดจนดำเนินการด้านเอกสารให้ครบถ้วน
                        เพียงแต่นายจ้างต้องจัดเตรียมเอกสารที่ใช้ประกอบการนำเข้า ดังรายละเอียดที่จะจัดส่งให้
                        หลังจากนั้นทางเรา จะดำเนินการให้ ครบทุกขั้นตอน เอกสารครบถ้วนตามกฎหมาย
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="py-4">
                    <button
                        class="w-full text-left flex justify-between items-center text-gray-700 font-medium focus:outline-none"
                        onclick="toggleAccordion(this)">
                        <span>งานไม่มีโอที(O.T.) จ้าง MOU ได้หรือไม่ ?</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform transform" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pt-2 text-gray-600 text-sm hidden">
                        จ้างได้ แต่ หากจ้างไปสักระยะหนึ่ง แล้วไม่มีโอที (บางช่วงเวลา) แรงงานพอเข้าใจได้กับ เนื้องาน
                        หากเป็นงานที่ไม่มีโอทีตั้งแต่แรกเลย อาจจะค่อนข้างลำบากในการหาผู้สมัครงาน เนื่องจากแรงงานกลุ่มนี้
                        คาดหวังรายได้จากเงินเดือนเพื่อส่งกลับทางบ้าน ส่วน โอทีนั้นจะเก็บไว้เป็นค่าใช้จ่ายประจำเดือน
                        หากไม่มีโอที อาจจะทำงานได้ไม่นาน อาจขอกลับก่อนครบสัญญาหรือหลบหนีไปในที่สุด
                        เพราะด้วยรายได้ไม่พอส่งทางบ้าน ไม่สามารถทำงานได้ในระยะยาวๆ ทำให้นายจ้างเสียเวลาฝึกฝนแรงงานใหม่อีก
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="py-4">
                    <button
                        class="w-full text-left flex justify-between items-center text-gray-700 font-medium focus:outline-none"
                        onclick="toggleAccordion(this)">
                        <span>สวัสดิการที่นายจ้างต้องจ่ายมีอะไรบ้างและต้องปฏิบัติตนอย่างไร ?</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform transform" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pt-2 text-gray-600 text-sm hidden">
                        แรงงานทุกคน สมควรได้รับการปฏิบัติเช่นแรงงานไทยเลย
                        คือได้รับสวัสดิการตามที่กฎหมายคุ้มครองแรงงานไทยกำหนด เช่น ค่าแรงขั้นต่ำ ,ค่าแรงทำงานนอกเวลา,
                        วันหยุดประจำสัปดาห์ ฯ,วันหยุดประเพณี(นักขัตฤกษ์) 13 วัน หากนายจ้างมีสวัสดิการอื่นๆที่มีอยู่แล้ว
                        ก็สามารถจ่ายให้กับแรงงานต่างด้าวได้ เช่น ค่าครองชีพ เบี้ยขยัน ค่ากะ ค่าตำแหน่ง ค่าเสี่ยงภัย
                        ค่าชิ้นงาน หรืออื่นๆ ตามที่มี ส่วนเรื่องที่พัก ค่าน้ำ-ค่าไฟ นายจ้าง
                        เป็นผู้จัดและให้แรงงานเป็นผู้จ่ายเองรายเดือนได้
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="py-4">
                    <button
                        class="w-full text-left flex justify-between items-center text-gray-700 font-medium focus:outline-none"
                        onclick="toggleAccordion(this)">
                        <span>ต้องยื่นประกันสังคม ให้กับแรงงานกลุ่มนี้หรือไม่ ?</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform transform" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pt-2 text-gray-600 text-sm hidden">
                        นายจ้างต้องทำการยื่นประกันสังคมให้กับแรงงานทุกคน หลังจากแรงงานเริ่มทำงานให้กับนายจ้างแล้ว
                        โดยต้องหักเงินส่งสมทบกองทุนประกันสังคม 5 % จากค่าแรง ของแรงงาน และนายจ้างจ่ายสมทบอีก 5 %
                        เช่นกันทุกคน
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="py-4">
                    <button
                        class="w-full text-left flex justify-between items-center text-gray-700 font-medium focus:outline-none"
                        onclick="toggleAccordion(this)">
                        <span>แรงงานที่ บนจ. ดิ อิมพอร์ตเตอร์ 168 นำเข้ามานั้น มีการรับประกันให้หรือไม่</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform transform" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pt-2 text-gray-600 text-sm hidden">
                        มี เรามีการรับประกันให้กับนายจ้าง คือ คืนค่าบริการ หรือชดเชยแรงงานให้ใหม่
                        ตามจำนวนแรงงานที่หลบหนีหรือส่งกลับ โดยการเพิ่มเติมจากชุดใหม่
                        หากนายจ้างประสงค์ต้องการแรงงานเพิ่มเติมอีก โดยไม่มีค่าบริการ(สำหรับการทดแทน) ทั้งนี้
                        แรงงานที่นำเข้ามานี้จะได้รับการการคัดเลือก และสัมภาษณ์
                        ชี้แจงให้ทราบลักษณะงานที่แรงงานต้องเข้ามาทำงานอยู่แล้ว ซึ่งการหลบหนีจะน้อย หากนายจ้างมีงาน
                        มีโอทีให้ทำทุกวัน มีสวัสดิการที่ดีให้ตลอด ทั้งปี รับรองว่าแรงงานหลบหนี/สูญหายจะน้อยมาก
                    </div>
                </div>




            </div>
        </div>
    </section>


    


    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16 mb-20">
        <div class="mx-auto grid max-w-screen-xl px-4 pb-8 md:grid-cols-12 lg:gap-12 lg:pb-16 xl:gap-0">
            <div class="content-center justify-self-start md:col-span-7 md:text-start">
                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight dark:text-white md:max-w-2xl md:text-5xl xl:text-6xl">
                    เว็บไซต์ที่เกี่ยวข้องกับ<br />แรงงานต่างด้าว</h1>
                <p class="mb-4 max-w-2xl text-gray-500 dark:text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl">
                    ท่านสามารถศึกษาด้านแรงงานต่างด้าวได้ตามเว็บไวต์อ้างอิงดังนี้</p>
                <a href="#"
                    class="inline-block rounded-lg bg-primary-700 px-6 py-3.5 text-center font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Shop
                    Now</a>
            </div>
            <div class="hidden md:col-span-5 md:mt-0 md:flex">
                <img class="dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/girl-shopping-list.svg"
                    alt="shopping illustration" />
                <img class="hidden dark:block"
                    src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/girl-shopping-list-dark.svg"
                    alt="shopping illustration" />
            </div>
        </div>
        <div
            class="mx-auto grid max-w-screen-xl grid-cols-2 gap-8 text-gray-500 dark:text-gray-400 sm:grid-cols-3 sm:gap-12 lg:grid-cols-6 px-4">
            <div>

                <a href="https://www.doe.go.th/" class="flex items-center md:justify-center">
                    <img src="./image-faq/กรมการจัดหางาน.webp" alt="" style="width: 100px">

                </a>
                <h3 class="mb-2  text-center font-bold dark:text-white">กรมการจัดหางาน</h3>
            </div>

            <div>

                <a href="https://www.mol.go.th/" class="flex items-center md:justify-center">
                    <img src="./image-faq/กระทรวงแรงงาน.webp" alt="" style="width: 90px">
                </a>
                <h3 class="mb-2 text-center font-bold dark:text-white">กระทรวงแรงงาน</h3>
            </div>

            <div>

                <a href="https://www.sso.go.th/wpr/" class="flex items-center md:justify-center">
                    <img src="./image-faq/ประกันสังคม.webp" alt="" style="width: 90px">
                </a>
                <h3 class="mb-2 text-center font-bold dark:text-white">ประกันสังคม</h3>
            </div>

            <div>

                <a href="https://www.immigration.go.th/" class="flex items-center md:justify-center">
                    <img src="./image-faq/ตม.webp" alt="" style="width: 70px">
                </a>
                <h3 class="mb-2 text-center font-bold dark:text-white">ตรวจคนเข้าเมือง</h3>
            </div>

            <div>

                <a href="https://www.labour.go.th/" class="flex items-center md:justify-center">
                    <img src="./image-faq/กรมสวัสดิการและคุ้มครองแรงงาน.webp" alt="" style="width: 90px">
                </a>
                <h3 class="mb-2 text-center font-bold dark:text-white">คุ้มครองแรงงาน</h3>

            </div>
            <div>

                <a href="https://www.prd.go.th//" class="flex items-center md:justify-center">
                    <img src="./image-faq/กรมประชาสัมพันธ์.svg" alt="" style="width: 90px">
                </a>
                <h3 class="mb-2 text-center font-bold dark:text-white">กรมประชาสัมพันธ์</h3>

            </div>

        </div>


    </section>

    <section class="bg-white py-12 mb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900">คู่มือ ด้านแรงงานต่างด้าว</h2>
                <p class="text-gray-600">ความรู้ในการจัดจ้างแรงงานต่างด้าว และการบริหารจัดการแรงงานต่างด้าวด้านต่างๆ เช่น การต่ออายุเอกสาร แจ้งเข้าที่พัก 24 ชัวโมง</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <a href="https://www.doe.go.th/prd/download/download_by_pool_file/108341" target="_blank"
                        title="link แนวทางการดำเนินงานของศูนย์ประสานแรงงานประมง 22 จังหวัด">
                        <img src="https://www.doe.go.th/prd/assets/upload/images/alien/8e7bd1244cc57b53d6fdb2b8289b1d68.jpg"
                            class="mx-auto mb-4" alt="แนวทางการดำเนินงานของศูนย์ประสานแรงงานประมง 22 จังหวัด">
                    </a>

                    <p class="text-gray-600">แนวทางการดำเนินงานของศูนย์ประสานแรงงานประมง 22 จังหวัด</p>

                </div>
                <div class="text-center">
                    <a href="https://www.doe.go.th/prd/download/download_by_pool_file/93869" target="_blank"
                        title="link คู่มือการแจ้งการทำงานอันมีลักษณะจำเป็นหรือเร่งด่วนหรือเป็นงานเฉพาะกิจ ตามมาตรา 61">
                        <img src="https://www.doe.go.th/prd/assets/upload/images/alien/3dc019ec3039118c9fc13c3edfc4891c.jpg"
                            class="images-cover img-kwonlg"
                            alt="คู่มือการแจ้งการทำงานอันมีลัษณะจำเป็นหรือเร่งด่วนหรือเป็นงานเฉพาะกิจ ตามมาตรา 61">
                    </a>
                    <p class="text-gray-600">คู่มือการแจ้งการทำงานอันมีลักษณะจำเป็นหรือเร่งด่วนหรือเป็นงานเฉพาะกิจ ตามมาตรา
                        61</p>
                </div>
                <div class="text-center">
                    <a href="https://www.doe.go.th/prd/download/download_by_pool_file/75531" target="_blank"
                        title="link คู่มือการขอใบอนุญาตทำงาน การออกใบอนุญาตทำงาน ตามมาตรา 59 และมาตรา 60 ของคนต่างด้าว ระดับฝีมือชำนาญการ">
                        <img src="https://www.doe.go.th/prd/assets/upload/images/alien/ff20dde5ded3404f2b051cce360d10d8.jpg"
                            class="images-cover img-kwonlg"
                            alt="คู่มือการขอใบอนุญาตทำงาน การออกใบอนุญาตทำงาน ตามมาตรา 59 และมาตรา 60 ของคนต่างด้าว ระดับฝีมือชำนาญการ">
                    </a>

                    <p class="text-gray-600">คู่มือการขอใบอนุญาตทำงาน การออกใบอนุญาตทำงาน ตามมาตรา 59 และมาตรา 60
                        ของคนต่างด้าว
                        ระดับฝีมือชำนาญการ</p>
                </div>
                <div class="text-center">
                    <a href="https://www.doe.go.th/prd/download/download_by_pool_file/62226" target="_blank"
                        title="link คู่มือสำหรับอบรมแรงงานต่างด้าวที่ได้รับอนุญาตทำงานในประเทศไทย ภาษาลาว">
                        <img src="https://www.doe.go.th/prd/assets/upload/images/alien/f7f2462022d4c005fd4dbe6a35c788ee.jpg"
                            class="images-cover img-kwonlg"
                            alt="คู่มือสำหรับอบรมแรงงานต่างด้าวที่ได้รับอนุญาตทำงานในประเทศไทย ภาษาลาว">
                    </a>
                    <p class="text-gray-600">คู่มือสำหรับอบรมแรงงานต่างด้าวที่ได้รับอนุญาตทำงานในประเทศไทย ภาษาลาว</p>
                </div>


                <div class="text-center">
                    <a href="https://www.doe.go.th/prd/download/download_by_pool_file/62225" target="_blank"
                        title="link คู่มือสำหรับอบรมแรงงานต่างด้าวที่ได้รับอนุญาตทำงานในประเทศไทย ภาษาเมียนมา">
                        <img src="https://www.doe.go.th/prd/assets/upload/images/alien/23a28ca1f015e465280836bbdc3487cd.jpg"
                            class="images-cover img-kwonlg"
                            alt="คู่มือสำหรับอบรมแรงงานต่างด้าวที่ได้รับอนุญาตทำงานในประเทศไทย ภาษาเมียนมา">
                    </a>

                    <p class="text-gray-600">คู่มือสำหรับอบรมแรงงานต่างด้าวที่ได้รับอนุญาตทำงานในประเทศไทย ภาษาเมียนมา</p>
                </div>

                <div class="text-center">
                    <a href="https://www.doe.go.th/prd/download/download_by_pool_file/62224" target="_blank"
                        title="link คู่มือสำหรับอบรมแรงงานต่างด้าวที่ได้รับอนุญาตทำงานในประเทศไทย ภาษากัมพูชา">
                        <img src="https://www.doe.go.th/prd/assets/upload/images/alien/e79385626db70776820ed087394b3f82.jpg"
                            class="images-cover img-kwonlg"
                            alt="คู่มือสำหรับอบรมแรงงานต่างด้าวที่ได้รับอนุญาตทำงานในประเทศไทย ภาษากัมพูชา">
                    </a>


                    <p class="text-gray-600">คู่มือสำหรับอบรมแรงงานต่างด้าวที่ได้รับอนุญาตทำงานในประเทศไทย ภาษากัมพูชา</p>
                </div>
                <div class="text-center">
                    <a href="https://www.doe.go.th/prd/download/download_by_pool_file/62222" target="_blank"
                        title="link คู่มือพระราชกำหนดการบริหารจัดการการทำงานของคนต่างด้าว พ.ศ. 2560 และที่แก้ไขเพิ่มเติม (ฉบับที่ 2) พ.ศ. 2561">
                        <img src="https://www.doe.go.th/prd/assets/upload/images/alien/7f3a12edc7cd6c9914cc2596a250c920.jpg"
                            class="images-cover img-kwonlg"
                            alt="คู่มือพระราชกำหนดการบริหารจัดการการทำงานของคนต่างด้าว พ.ศ. 2560 และที่แก้ไขเพิ่มเติม (ฉบับที่ 2) พ.ศ. 2561">
                    </a>
                    <p class="text-gray-600">คู่มือพระราชกำหนดการบริหารจัดการการทำงานของคนต่างด้าว พ.ศ. 2560
                        และที่แก้ไขเพิ่มเติม (ฉบับที่ 2) พ.ศ. 256</p>
                </div>

                <div class="text-center">
                    <a href="https://www.doe.go.th/prd/download/download_by_pool_file/62221" target="_blank"
                        title="link คู่มือการขออนุญาตทำงานของแรงงานต่างด้าว สำหรับนายจ้าง-สถานประกอบการ">
                        <img src="https://www.doe.go.th/prd/assets/upload/images/alien/eeb6a3ad01e1c94f7e80815b296c0781.jpg"
                            class="images-cover img-kwonlg"
                            alt="คู่มือการขออนุญาตทำงานของแรงงานต่างด้าว สำหรับนายจ้าง-สถานประกอบการ">
                    </a>

                    <p class="text-gray-600">คู่มือการขออนุญาตทำงานของแรงงานต่างด้าว สำหรับนายจ้าง-สถานประกอบการ</p>
                </div>


                <div class="text-center">
                    <a href="https://www.doe.go.th/prd/download/download_by_pool_file/63082" target="_blank"
                        title="link KM การดำเนินงานของศูนย์แรกรับเข้าทำงานและสิ้นสุดการจ้าง">
                        <img src="https://www.doe.go.th/prd/assets/upload/images/alien/00d221c2670fa94d8824f61f530cb967.jpg"
                            class="images-cover img-kwonlg" alt="KM การดำเนินงานของศูนย์แรกรับเข้าทำงานและสิ้นสุดการจ้าง">
                    </a>
                    <p class="text-gray-600">KM การดำเนินงานของศูนย์แรกรับเข้าทำงานและสิ้นสุดการจ้าง </p>
                </div>

                <div class="text-center">
                    <a href="https://www.doe.go.th/prd/download/download_by_pool_file/46401" target="_blank"
                        title="link คู่มือการยื่นคำขอและการพิจารณาอนุญาตทำงานผ่านระบบ Single Window for Visa and Work permit และใบอนุญาตทำงานดิจิทัล">
                        <img src="https://www.doe.go.th/prd/assets/upload/images/alien/35b72b50f96d9eec508b8632cc92275c.jpg"
                            class="images-cover img-kwonlg"
                            alt="คู่มือการยื่นคำขอและการพิจารณาอนุญาตทำงานผ่านระบบ Single Window for Visa and Work permit และใบอนุญาตทำงานดิจิทัล">
                    </a>
                    <p class="text-gray-600">คู่มือการยื่นคำขอและการพิจารณาอนุญาตทำงานผ่านระบบ Single Window for Visa and
                        Work permit และใบอนุญาตทำงานดิจิทัล</p>
                </div>

                <div class="text-center">
                    <a href="https://www.doe.go.th/prd/download/download_by_pool_file/38585" target="_blank"
                        title="link คู่มือสำหรับอบรมแรงงานต่างด้าว-ภาษาเวียดนาม">
                        <img src="https://www.doe.go.th/prd/assets/upload/images/alien/75c265477d9bf709c453f521a227efee.jpg"
                            class="images-cover img-kwonlg" alt="คู่มือสำหรับอบรมแรงงานต่างด้าว-ภาษาเวียดนาม">
                    </a>

                    <p class="text-gray-600">คู่มือสำหรับอบรมแรงงานต่างด้าว-ภาษาเวียดนาม</p>
                </div>


                {{-- <div class="text-center">
                    <a href="https://www.doe.go.th/prd/download/download_by_pool_file/32420" target="_blank"
                        title="link แนวปฏิบัติการนำคนต่างด้าวมาทำงานกับนายจ้างในประเทศ ตามบันทึกความเข้าใจว่าด้วยความร่วมมือในการจ้างแรงงานระหว่างรัฐ (MOU)">
                        <img src="https://www.doe.go.th/prd/assets/upload/images/alien/3f3410c826427343212a89a5de791970.jpg"
                            class="images-cover img-kwonlg"
                            alt="แนวปฏิบัติการนำคนต่างด้าวมาทำงานกับนายจ้างในประเทศ ตามบันทึกความเข้าใจว่าด้วยความร่วมมือในการจ้างแรงงานระหว่างรัฐ(MOU)">
                    </a>
                    <p class="text-gray-600">แนวปฏิบัติการนำคนต่างด้าวมาทำงานกับนายจ้างในประเทศ
                        ตามบันทึกความเข้าใจว่าด้วยความร่วมมือในการจ้างแรงงานระหว่างรัฐ (MOU)</p>
                </div> --}}


                <div class="text-center">
                    <a href="https://www.doe.go.th/prd/download/download_by_pool_file/32420" target="_blank"
                        title="link แนวปฏิบัติการนำคนต่างด้าวมาทำงานกับนายจ้างในประเทศ ตามบันทึกความเข้าใจว่าด้วยความร่วมมือในการจ้างแรงงานระหว่างรัฐ (MOU)">
                        <img src="https://www.doe.go.th/prd/assets/upload/images/alien/3f3410c826427343212a89a5de791970.jpg"
                            class="images-cover img-kwonlg"
                            alt="แนวปฏิบัติการนำคนต่างด้าวมาทำงานกับนายจ้างในประเทศ ตามบันทึกความเข้าใจว่าด้วยความร่วมมือในการจ้างแรงงานระหว่างรัฐ(MOU)">
                    </a>
                    <p class="text-gray-600">แนวปฏิบัติการนำคนต่างด้าวมาทำงานกับนายจ้างในประเทศ
                        ตามบันทึกความเข้าใจว่าด้วยความร่วมมือในการจ้างแรงงานระหว่างรัฐ (MOU)</p>
                </div>



                <div class="text-center">
                    <a href="https://www.doe.go.th/prd/download/download_by_pool_file/22343" target="_blank"
                        title="link แนวทางในการบริหารจัดการแรงงานต่างด้าวตามมติคณะรัฐมนตรี เมื่อวันที่ 16 มกราคม 2561 สำหรับเจ้าหน้าที่ ผู้ปฏิบัติงาน ณ ศูนย์ OSS และ ศปก.บต.">
                        <img src="https://www.doe.go.th/prd/assets/upload/images/alien/5c291aa2bfc80843a5063a2313a899b5.jpg"
                            class="images-cover img-kwonlg"
                            alt="แนวทางในการบริหารจัดการแรงงานต่างด้าวตามมติคณะรัฐมนตรี เมื่อวันที่ 16 มกราคม 2561 สำหรับเจ้าหน้าที่ ผู้ปฏิบัติงาน ณ ศูนย์ OSS และ ศปก.บต." />
                    </a>
                    <p class="text-gray-600">แนวทางในการบริหารจัดการแรงงานต่างด้าวตามมติคณะรัฐมนตรี เมื่อวันที่ 16 มกราคม
                        2561 สำหรับเจ้าหน้าที่ ผู้ปฏิบัติงาน ณ ศูนย์ OSS และ ศปก.บต.</p>
                </div>

                <div class="text-center">
                    <a href="https://www.doe.go.th/prd/download/download_by_pool_file/17193" target="_blank"
                        title="link การขออนุญาตเข้ามาดำเนินงานในประเทศไทยขององค์การเอกชนต่างประเทศ">
                        <img src="https://www.doe.go.th/prd/assets/upload/images/alien/674c8ea0085d8ac64437c7472ec06e44.jpg"
                            class="images-cover img-kwonlg"
                            alt="การขออนุญาตเข้ามาดำเนินงานในประเทศไทยขององค์การเอกชนต่างประเทศ" />
                    </a>
                    <p class="text-gray-600">การขออนุญาตเข้ามาดำเนินงานในประเทศไทยขององค์การเอกชนต่างประเทศ</p>
                </div>

                <div class="text-center">
                    <a href="https://www.doe.go.th/prd/download/download_by_pool_file/4290" target="_blank"
                        title="link การพิจารณาอนุญาตทำงานของคนต่างด้าวสัญชาติเมียนมา ลาว และกัมพูชา ตามมาตรา 14">
                        <img src="https://www.doe.go.th/prd/assets/upload/images/alien/a538de78f8824473edbe6429a10e6c93.jpg"
                            class="images-cover img-kwonlg"
                            alt="การพิจารณาอนุญาตทำงานของคนต่างด้าวสัญชาติเมียนมา ลาว และกัมพูชา ตามมาตรา 14 แห่งพระราชบัญญัติการทำงานของคนต่างด้าว พ.ศ.2551" />
                    </a>
                    <p class="text-gray-600">การพิจารณาอนุญาตทำงานของคนต่างด้าวสัญชาติเมียนมา ลาว และกัมพูชา ตามมาตรา 14
                    </p>
                </div>

                <div class="text-center">
                    <a href="https://www.doe.go.th/prd/download/download_by_pool_file/2821" target="_blank"
                        title="link การพิจารณาอนุญาตทำงาน คนบนพื้นที่สูง">
                        <img src="https://www.doe.go.th/prd/assets/upload/images/alien/f53316b2bc6bee4f1aa88615193e2542.jpg"
                            class="images-cover img-kwonlg" alt="การพิจารณาอนุญาตทำงาน คนบนพื้นที่สูง" />
                    </a>
                    <p class="text-gray-600">การพิจารณาอนุญาตทำงาน คนบนพื้นที่สูง</p>
                </div>


            </div>
        </div>
    </section>












    <script>
        function toggleAccordion(element) {
            const content = element.nextElementSibling;
            const icon = element.querySelector("svg");

            content.classList.toggle("hidden");
            icon.classList.toggle("rotate-180");
        }
    </script>
@endsection
