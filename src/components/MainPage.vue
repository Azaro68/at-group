<template>
  <div class="mainPage" ref="container">
    <Suspense v-if="showEngin">
      <template #default>
        <EngineeringSystems class="fade-in"/>
      </template>
    </Suspense>

    <Suspense v-if="showWhy">
      <template #default>
        <WhyChoose class="fade-in"/>
      </template>
    </Suspense>

    <Suspense v-if="showAbout">
      <template #default>
        <AboutCompany class="fade-in"/>
      </template>
    </Suspense>
  </div>
</template>

<script>
import { defineAsyncComponent, ref, onMounted, onUnmounted } from 'vue';

export default {
  name: 'MainPage',
  components: {
    EngineeringSystems: defineAsyncComponent(() => 
      import('./element/EngineeringSystems.vue')
    ),
    WhyChoose: defineAsyncComponent(() => 
      import('./element/WhyChoose.vue')
    ),
    AboutCompany: defineAsyncComponent(() => 
      import('./element/AboutCompany.vue')
    )
  },
  setup() {
    const showEngin = ref(false);
    const showWhy = ref(false);
    const showAbout = ref(false);
    const container = ref(null);
    // const sectionHeights = [0.25, 0.5, 0.75];

  const checkScroll = () => {
  const viewportHeight = window.innerHeight;
    const triggerPoints = [
      viewportHeight * 0.25,
      viewportHeight * 1.22,
      viewportHeight * 1.8
    ];
    console.log(viewportHeight)
  
    const scrollPosition = window.scrollY + viewportHeight;
    console.log(scrollPosition)
    if (scrollPosition > triggerPoints[0]) showEngin.value = true;
    if (scrollPosition > triggerPoints[1]) showWhy.value = true;
    console.log(triggerPoints, "TRIG")
    if (scrollPosition > triggerPoints[2]) showAbout.value = true;
  };

    onMounted(() => {
      window.addEventListener('scroll', checkScroll);
      window.addEventListener('resize', checkScroll);
      checkScroll();
    });

    onUnmounted(() => {
      window.removeEventListener('scroll', checkScroll);
      window.removeEventListener('resize', checkScroll);
    });

    return {
      showEngin,
      showWhy,
      showAbout,
      container
    };
  }
}
</script>

<style scoped>
.mainPage {
  background-color: #F6F7F9;
}

.loading-placeholder {
  height: 300px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
  color: #666;
  margin: 20px 0;
  background: rgba(0,0,0,0.05);
  border-radius: 8px;
}

.fade-in {
  animation: fadeIn 0.5s ease-out;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}
</style>